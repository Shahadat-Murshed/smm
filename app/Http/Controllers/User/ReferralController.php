<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ReferralHash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Exception;

class ReferralController extends Controller
{
    public function create()
    {
        $data['new_hash'] = Str::random(5);
        $data['referral_current'] = ReferralHash::where('created_by', auth()->id())->latest()->first();
        return view('user.pages.referral.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hash' => 'required|string',
            'max_usage' => 'required',
            'percentage' => 'required|max:100'
        ]);

        try {
            $this->storeUpdateReferral(array_merge($data, ['created_by' => auth()->id()]), new ReferralHash());
            return back();
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            Log::error('Unable to create referral link');
            return back()->with([
                'error' => 'Something went wrong please try again'
            ]);
        }
    }

    private function storeUpdateReferral($data, ReferralHash $referral): void
    {
        $referral->hash = data_get($data, 'hash');
        $referral->created_by = data_get($data, 'created_by');
        $referral->max_usage = data_get($data, 'max_usage');
        $referral->percentage = data_get($data, 'percentage', 100);
        $referral->registered_users = data_get($data, 'registered_users', json_encode([]));
        $referral->save();
    }
}
