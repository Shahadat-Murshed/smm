<?php

namespace App\Http\Controllers;

use App\Models\AdvancedService;
use App\Models\Package;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'type' => 'required|in:service,package',
            'id' => 'required'
        ]);


        if($request->type == 'package'){
            return $this->handlePackage($request);
        }

        if($request->type == 'service') {
            return $this->handleService($request);
        }

        return abort(404);
    }

    private function handlePackage(Request $request)
    {
        $package = Package::find($request->id);

        if(blank($package)){
            return abort(404);
        }

        return view('cart.package',[
            'package' => $package
        ]);
    }

    private function handleService(Request $request)
    {
        $service = AdvancedService::find($request->id);

        if(blank($service)){
            return abort(403);
        }

        return view('cart.service',[
            'service' => $service,
        ]);
    }

    public function processPackage(Request $request)
    {
        return view('cart.success');
    }
}
