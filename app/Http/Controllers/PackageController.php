<?php

namespace App\Http\Controllers;

use App\Models\AdvancedService;
use App\Models\AdvancedServiceProvider;
use App\Models\Category;
use App\Models\Service;
use App\Models\Package;
use App\Models\Order;
use App\Models\PackageAdvancedService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function index()
    {
        $page_title = "All Packages";
        $packages = Package::all();
        return view('admin.pages.package.show', compact('page_title','packages'));
    }

    public function show(){
        $page_title = "All Packages";
        $packages = Package::all();
        return view('admin.pages.package.show', compact('page_title','packages'));
    }

    public function create()
    {
        $data['services'] = Service::all();
        $data['advanced_services'] = AdvancedService::all();
        $data['categories'] = Category::all();
        return view('admin.pages.package.create', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        
        $validation = Validator::make($request->all(),[
            "package_title" => "required|bail",
            "status" => "required|bail",
            "price" => "required|bail",
            "price_monthly" => "required|bail",
            "price_annually" => "required|bail",
            "total_cost_sum" => "required|bail",
            "category" => "required|bail",
            "services" => "required|bail",
            "drip_timer_starts" => "required|bail",
            "drip_timer_ends" => "required|bail",
            "discount_affiliate" => "required|bail",
            "discount_ambassador" => "required|bail",
            "has_discount" => "required|bail",
            "discount_threshold" => "required|bail",
            "additional_days" => "required|bail",
        ]);


        if($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $profit = $request->price - $request->total_cost_sum;
        $profit_monthly = $request->price_monthly - $request->total_cost_sum;
        $profit_annually = $request->price_annually - ($request->total_cost_sum*12);

        DB::beginTransaction();
        try {
            $package = New Package();
            $package->package_name = $request->package_title;
            $package->status = $request->status;
            $package->price = $request->price;
            $package->price_monthly = $request->price_monthly;
            $package->price_annually = $request->price_annually;
            $package->profit = $profit;
            $package->profit_monthly = $profit_monthly;
            $package->profit_annually = $profit_annually;
            $package->category_id = $request->category;
            $package->point_1 = $request->point_1;
            $package->point_2 = $request->point_2;
            $package->point_3 = $request->point_3;
            $package->description = $request->description;
            $package->drip_timer_starts = $request->drip_timer_starts;
            $package->drip_timer_ends = $request->drip_timer_ends;
            $package->discount_affiliate = $request->discount_affiliate;
            $package->discount_ambassador = $request->discount_ambassador;
            $package->has_discount = $request->has_discount;
            $package->discount_threshold = $request->discount_threshold;
            $package->additional_days = $request->additional_days;

            $package->save();

            foreach($request->services as $service){
                $adv_services = AdvancedService::find($service);
                $adv_providers = $adv_services->advanced_providers()->pluck('id');
                foreach($adv_providers as $adv_provider){
                    $adv_package = New PackageAdvancedService();
                    $adv_package->packages_id = $package->id;
                    $adv_package->adv_service_id = $service;
                    $adv_package->adv_service_provider_id = $adv_provider;
                    $adv_package->amount = $request->package_amounts[$adv_provider];
                    $adv_package->save();
                }
            }
            DB::commit();
            }catch (\Exception $ex){
            DB::rollBack();
            Log::error($ex->getMessage());
            return back()->withErrors([
                'error' => 'Something went wrong'
            ]);
        }

        return redirect()->route('admin.package.index');
    }

    public function appendService(Request $request)
    {
        return view('partials.add-new-service',[
            'index' => $request->index,
            'advanced_services' =>  AdvancedService::all()
        ]);
    }

    public function edit($id){

        $data['package'] = Package::find($id);
        $data['advanced_services'] = AdvancedService::all();
        $data['categories'] = Category::all();
        return view('admin.pages.package.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $package = Package::find($id);
        $validation = Validator::make($request->all(),[
            "package_title" => "required|bail",
            "status" => "required|bail",
            "price" => "required|bail",
            "price_monthly" => "required|bail",
            "price_annually" => "required|bail",
            "total_cost_sum" => "required|bail",
            "category" => "required|bail",
            "drip_timer_starts" => "required|bail",
            "drip_timer_ends" => "required|bail",
            "discount_affiliate" => "required|bail",
            "discount_ambassador" => "required|bail",
            "has_discount" => "required|bail",
            "discount_threshold" => "required|bail",
            "additional_days" => "required|bail",
        ]);

        if($validation->fails()) {
            return back()->withErrors($validation)->withInput();;
        }

        $profit = $request->price - $request->total_cost_sum;
        $profit_monthly = $request->price_monthly - $request->total_cost_sum;
        $profit_annually = $request->price_annually - ($request->total_cost_sum*12);

        DB::beginTransaction();

        try{
            $package->package_name = $request->package_title;
            $package->status = $request->status;
            $package->price = $request->price;
            $package->price_monthly = $request->price_monthly;
            $package->price_annually = $request->price_annually;
            $package->profit = $profit;
            $package->profit_monthly = $profit_monthly;
            $package->profit_annually = $profit_annually;
            $package->category_id = $request->category;
            $package->point_1 = $request->point_1;
            $package->point_2 = $request->point_2;
            $package->point_3 = $request->point_3;
            $package->drip_timer_starts = $request->drip_timer_starts;
            $package->drip_timer_ends = $request->drip_timer_ends;
            $package->discount_affiliate = $request->discount_affiliate;
            $package->discount_ambassador = $request->discount_ambassador;
            $package->has_discount = $request->has_discount;
            $package->discount_threshold = $request->discount_threshold;
            $package->description = $request->description;
            $package->additional_days = $request->additional_days;

            $package->advanced_services()->delete();

            $package->save();

            foreach($request->services as $service){
                $adv_services = AdvancedService::find($service);
                $adv_providers = $adv_services->advanced_providers()->pluck('id');
                foreach($adv_providers as $adv_provider){
                    $adv_package = New PackageAdvancedService();
                    $adv_package->packages_id = $package->id;
                    $adv_package->adv_service_id = $service;
                    $adv_package->adv_service_provider_id = $adv_provider;
                    $adv_package->amount = $request->package_amounts[$adv_provider];
                    $adv_package->save();
                }
            }

            DB::commit();
            }catch (\Exception $ex){
            DB::rollBack();
            Log::error($ex->getMessage());
            dd($request->all());
            return back()->withErrors([
                'error' => 'Something went wrong'
            ]);
    }

        return redirect()->route('admin.package.index');

        // return response()->json([
        //     'success'=>'Advanced service updated successfully',
        //     'message'=>'Advanced Service Updated Successfully'
        // ]);
    }

    public function destroy($id)
    {
         $package= Package::find($id);

            if (!$package) {
                return back()->with('error', 'Data Not Found');
            }
            if ($package['status'] == 0) {
                $status = 1;
            } else {
                $status = 0;
            }
            $package->status = $status;
            $package->save();
            return back()->with('success', 'Successfully Updated');
    }

    public function searchAdvServices(Request $request): \Illuminate\Http\JsonResponse
    {

        $adv_service_id = $request->input('value');
        $advanced_service = AdvancedService::findorFail($adv_service_id);
        $advanced_service_providers = AdvancedServiceProvider::with('service')->where('advanced_service_id', $adv_service_id)->get();
        // dd($advanced_service_providers);
        return response()->json(['data' => $advanced_service, 'provider' => $advanced_service_providers]);
    }

}
