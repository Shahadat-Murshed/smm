<?php

namespace App\Http\Controllers;

use App\Models\ApiProvider;
use App\Models\Category;
use App\Models\LinkValidator;
use App\Models\Service;
use App\Models\AdvancedService as AdvancedServiceModel;
use App\Services\AdvancedService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdvancedServiceController extends Controller
{
    private $advancedService;

    public function __construct(AdvancedService $advancedService)
    {
        $this->advancedService = $advancedService;
    }

    public function index()
    {
        $categories = Category::with('service', 'service.provider')->has('advanced_service')->paginate(config('basic.paginate'));
        $apiProviders = ApiProvider::all();
        return view('admin.pages.services.show-advanced-service', compact('categories', 'apiProviders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['linkValidators'] = LinkValidator::all();
        $data['apiProviders'] = ApiProvider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('admin.pages.services.add-advanced-service', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),[
            "service_title" => "required|bail",
            "category_id" => "required|bail",
            "min_amount" => "required|bail",
            "max_amount" => "required|bail",
            "service_status" => "required|bail",
            "drip_timer_starts" => "required|bail",
            "drip_timer_ends" => "required|bail",
            "discount_affiliate" => "required|bail",
            "discount_ambassador" => "required|bail",
            "has_discount" => "required|bail",
            "discount_threshold" => "required|bail",
            'provider' => 'required|array|bail',
            'provider.*.price_per_action' => 'required|numeric|bail',
            'provider.*.api_provider_id' => 'required|numeric|bail',
            'provider.*.api_service_id' => 'required|numeric|bail',
            'provider.*.drip_feed' => 'nullable|bail',
            'provider.*.link_validators_id' => 'nullable|bail',
            'provider.*.description' => 'nullable|string|bail',
            'provider.*.max_urls' => 'required|numeric|bail',
            'provider.*.has_comment' => 'required|bail',
            'provider.*.title' => 'required|bail',
        ]);

        if($validation->fails()) {
            return response()->json(['errors'=>$validation->errors(), 'message'=>$validation->errors()->first()],422);
        }

        $data = $validation->validated();
        $total_cost = 0;
        $total_selling_price = 0;
        try {
            DB::beginTransaction();
            $service = $this->advancedService->createOrUpdateAdvancedService($data);
            foreach($data['provider'] as $provider){
                $new_provider = $this->advancedService->addProviderToAService($service->id,$provider);
                $cost = $service->min_amount * $new_provider->api_provider_price;
                $total_cost += $cost;
                $selling_price = $new_provider['price_per_action'] * $service->min_amount;
                $total_selling_price += $selling_price;
            }
            $profit = $total_selling_price - $total_cost;
            $service->profit = $profit;
            $service->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return response()->json(['errors'=>'Something went wrong.'],500);
        }

        return response()->json(['success'=>'Advanced service created successfully', 'message'=>'Advanced Service Created Successfully']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['services'] = \App\Models\Service::all();
        $data['service'] = \App\Models\AdvancedService::findOrFail($id);
        $data['categories'] = Category::all();
        $data['linkValidators'] = LinkValidator::all();
        $data['apiProviders'] = ApiProvider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('admin.pages.services.edit-advanced-services',$data);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(),[
            "service_title" => "required|bail",
            "category_id" => "required|bail",
            "min_amount" => "required|bail",
            "max_amount" => "required|bail",
            "service_status" => "required|bail",
            "drip_timer_starts" => "required|bail",
            "drip_timer_ends" => "required|bail",
            "discount_affiliate" => "required|bail",
            "discount_ambassador" => "required|bail",
            "has_discount" => "required|bail",
            "discount_threshold" => "required|bail",
            'provider' => 'required|array|bail',
            'provider.*.id' => 'numeric',
            'provider.*.price_per_action' => 'required|numeric|bail',
            'provider.*.api_provider_id' => 'required|numeric|bail',
            'provider.*.api_service_id' => 'required|numeric|bail',
            'provider.*.drip_feed' => 'nullable|bail',
            'provider.*.link_validators_id' => 'nullable|bail',
            'provider.*.description' => 'nullable|string|bail',
            'provider.*.max_urls' => 'required|numeric|bail',
            'provider.*.has_comment' => 'required|bail',
            'provider.*.title' => 'required|bail',
        ]);

        if($validation->fails()) {
            return response()->json(['errors'=>$validation->errors(), 'message'=>$validation->errors()->first()],422);
        }

        $data = $validation->validated();
        try {
            DB::beginTransaction();
            $data = array_merge($data, ['service_id' => $id]);
            $service = $this->advancedService->createOrUpdateAdvancedService($data, true);
            // TODO: remove this
            
            foreach($data['provider'] as $provider){
                $this->advancedService->addProviderToAService($service->id, $provider);
            }
            DB::commit();
        } catch (\Exception $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return response()->json(['errors'=>'Something went wrong.'],500);
        }

        return response()->json([
            'success'=>'Advanced service updated successfully',
            'message'=>'Advanced Service Updated Successfully'
        ]);
    }


    public function destroy($id)
    {
         $cat= AdvancedServiceModel::find($id);
            if (!$cat) {
                return back()->with('error', 'Data Not Found');
            }
            if ($cat['service_status'] == 0) {
                $status = 1;
            } else {
                $status = 0;
            }
            $cat->service_status = $status;
            $cat->save();
            return back()->with('success', 'Successfully Updated');
    }

    public function appendNewProviderView(Request $request)
    {
        return view('partials.add-new-provider',[
            'index' => $request->get('index',0),
            'apiProviders' => ApiProvider::all(),
            'services' => Service::all(),
            'linkValidators' => LinkValidator::all(),
            'provider' => null
        ])->render();
    }

    public function statusChange(Request $request, $id)
    {
        $cat= AdvancedServiceModel::find($id);
        if (!$cat) {
            return back()->with('error', 'Data Not Found');
        }
        if ($cat['service_status'] == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $cat->service_status = $status;
        $cat->save();
        return back()->with('success', 'Successfully Updated');
    }
}
