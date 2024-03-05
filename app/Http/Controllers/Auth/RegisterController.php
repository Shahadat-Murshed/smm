<?php

namespace App\Http\Controllers\Auth;

use App\Http\Traits\Notify;
use App\Models\ReferralHash;
use App\Models\Template;
use App\Models\User;
use App\Models\UserTier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Tier;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use Notify;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $info = json_decode(json_encode(getIpInfo()), true);
        $country_code = null;
        if (!empty($info['code'])) {
            $country_code = @$info['code'][0];
        }
        $countries = config('country');
        $templateSection = ['register'];
        $templates = Template::templateMedia()->whereIn('section_name', $templateSection)->get()->groupBy('section_name');
        session()->put('role', 'User');
        return view('v2.register', compact('countries', 'country_code'));
    }

    public function sponsor(Request $request, $sponsor, $hash = null)
    {
        if($hash){
            $referralHash = ReferralHash::where('hash', $request->url())->first();
            if(!blank($referralHash)){
                if($referralHash->max_usage === $referralHash->current_usage + 1){
                    abort(404);
                }
            }
            session()->put('custom_link', $referralHash);
        }
        session()->put('sponsor', $sponsor);
        $sponsorId =User::where('username', $sponsor)->first();
        $sponsorRole = $sponsorId->role;
        $country_code = null;
        if (isset($info['code']) || !empty($info['code'])) {
            $country_code = @$info['code'][0];
        }
        $countries = config('country');
        // return view(template() . 'auth.register', compact('sponsor', 'sponsorRole', 'countries', 'country_code'));
        return view('v2.register', compact('sponsor', 'sponsorRole', 'countries', 'country_code'));
    }

    public function affiliate()
    {
        session()->put('role', 'Affiliate');
        $country_code = null;
        if (isset($info['code']) || !empty($info['code'])) {
            $country_code = @$info['code'][0];
        }
        $countries = config('country');

        // return view(template() . 'auth.register', compact('countries', 'country_code'));
        return view('v2.register', compact('countries', 'country_code'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (basicControl()->reCaptcha_status_registration) {
            $rules['g-recaptcha-response'] = ['sometimes', 'required','captcha'];
        }

        $rules['firstname'] = ['required', 'string', 'max:91'];
        $rules['lastname'] = ['required', 'string', 'max:91'];
        $rules['username'] = ['required', 'alpha_dash', 'min:5', 'unique:users,username'];
        $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:users,email'];
        $rules['country_code'] = ['max:5'];
        $rules['phone_code'] = ['required'];
        $rules['phone'] = ['required'];
        $rules['password'] = ['required', 'string', 'confirmed'];

        return Validator::make($data, $rules, [
            'firstname.required' => 'First Name Field is required',
            'lastname.required' => 'Last Name Field is required',
            'phone' => 'The :attribute field contains an invalid number . ',
            'g-recaptcha-response.required' => 'The reCAPTCHA field is required . ',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $basic = (object)config('basic');
        $sponsor = session()->get('sponsor');
        if ($sponsor != null) {
            $sponsorId = User::where('username', $sponsor)->first();
            if($sponsorId){
                $sponsorRole = $sponsorId->role;
                if($sponsorRole == 'Ambassador'){
                    $role = 'Affiliate';
                }
                elseif($sponsorRole == 'Affiliate'){
                    $role = 'User';
                }
            }
        } else {
            $sponsorId = null;
        }

        $affiliate = session()->get('role');

        if($affiliate != null) {
            $role = 'Affiliate';
        }
        if(session()->has('role')){
            $role = session()->get('role');
        }
        else{
            $role = 'Affiliate';
        }

        $custom = session()->get('custom_link');

        DB::beginTransaction();
        try{
            if($custom){
                $custom->current_usage = $custom->current_usage + 1;
                $custom->save();
                session()->forget('custom_link');
            }

            $percentage = 0;

            if($role === 'Affiliate'){
                $percentage = $custom ? profit_in_percentage($custom->percentage) : 10;
            }

            $user = User::create([
                'base_percentage' => $percentage,
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'phone_code' => $data['phone_code'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'promo_code' => Str::random(5),
                'api_token' => Str::random(20),
                'email_verification' => ($basic->email_verification) ? 0 : 1,
                'sms_verification' => ($basic->sms_verification) ? 0 : 1,
                'referral_id' => ($sponsorId != null) ? $sponsorId->id : null,
                'role' => $role,
            ]);
            $userTier = new UserTier;
            $userTier->user_id = $user->id;
            $userTier->tier_id = Tier::where('level', 1)->first()->id;
            $userTier->current_amount = 0;
            $userTier->expiry_date = Carbon::now()->addDays(30);
            $userTier->save();
            if($custom){
                $custom->registered_users = json_encode(array_merge(json_decode($custom->registered_users, true), [$user->id]));
                $custom->save();
            }
            DB::commit();
            return $user;
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return abort(500);
        }
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        // dd($user);
        $msg = [
            'username' => $user->username,
        ];
        $action = [
            "link" => route('admin.user-edit', $user->id),
            "icon" => "fas fa-user text-white"
        ];

        $this->adminPushNotification('ADDED_USER', $msg, $action);
        $this->guard()->login($user);
        session()->forget('sponsor');

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        if ($request->ajax()) {
            return route('user.home');
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }


    /**
     * The user has been registered.
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        $user->last_login = Carbon::now();
        $user->save();
    }

    protected function guard()
    {
        return Auth::guard();
    }

}
