<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApiProvider;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $categories = Category::with('service', 'service.provider')->has('advanced_service')->paginate(config('basic.paginate'));
        $apiProviders = ApiProvider::all();
        $user = Auth::user();
        return view('user.pages.affiliate.service-show', compact('categories', 'apiProviders', 'user'));
    }


    public function search(Request $request)
    {
        $categories = Category::with('service')->where('status', 1)->get();
        $search = $request->all();
        $services = Service::where('service_status', 1)
            ->userRate()
            ->when(isset($search['service']), function ($query) use ($search) {
                return $query->where('service_title', 'LIKE', "%{$search['service']}%");
            })
            ->when(isset($search['category']), function ($query) use ($search) {
                return $query->where('category_id', $search['category']);
            })
            ->with(['category'])
            ->get()
            ->groupBy('category.category_title');
        return view('user.pages.services.search-service', compact('services', 'categories'));
    }
}
