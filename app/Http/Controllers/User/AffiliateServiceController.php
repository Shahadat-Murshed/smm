<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApiProvider;
use App\Models\Category;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class AffiliateServiceController extends Controller
{
    public function services()
    {
        $categories = Category::with('service', 'service.provider')->has('advanced_service')->paginate(config('basic.paginate'));
        $apiProviders = ApiProvider::all();

        return view('user.pages.affiliate.service-show', compact('categories', 'apiProviders'));
    }
}
