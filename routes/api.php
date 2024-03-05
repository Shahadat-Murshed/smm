<?php

use App\Models\AdvancedService;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/order', 'Api\OrderController');

// Route::post('/v1','ApiController@apiV1')->name('userApiKey');

/** Route for Categories **/
Route::get('/v2/categories',function(){
    return response()->json(['data'=>app('App\Models\Category')->all()]);
});

/** Route for Advanced Services **/
Route::get('/v2/adv_services',function(){
    return response()->json(['data'=>app('App\Models\AdvancedService')->all()]);
});

/** Single Advanced Service **/
Route::get('/v2/adv_services/{id}',function($id){
    return response()->json(['data'=>app('App\Models\AdvancedService')->find($id)]);
});

/** Route For All Advanced Services under a category **/
Route::get('/v2/adv_services/category/{categoryId}', function ($categoryId) {
    $adv_services = AdvancedService::where('category_id', $categoryId)->get();

    if (!$adv_services) {
        return response()->json(['message' => 'Services not found for the specified category'], 404);
    }

    return response()->json($adv_services);
});

/** Route For Pacakges under a category **/
Route::get('/v2/packages/category/{categoryId}', function ($categoryId) {
    $packages = Package::where('category_id', $categoryId)->get();

    if (!$packages) {
        return response()->json(['message' => 'Packages not found for the specified category'], 404);
    }

    return response()->json($packages);
});


/** Route for checking Coupon **/
Route::post('/check-coupon', function (Request $request) {
    $promo_code = $request->promo_code;
    $user = User::where('promo_code', $promo_code)->where('is_promo_active', 1)->first();
    if ($user) {
        $response = [
            'status' => true,
            'role' => Str::lower($user->role),
        ];
    } else {
        $response = [
            'status' => false,
        ];
    }

    return response()->json($response);
});
