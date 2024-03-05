<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApiProvider;
use App\Models\Category;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class AffiliateZoneController extends Controller
{
    public function packages(){
        $page_title = "All Packages";
        $packages = Package::all();
        return view('user.pages.affiliate.package-show', compact('page_title','packages'));
    }
}
