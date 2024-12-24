<?php

namespace App\Http\Controllers;

use App\Models\GoogleAnalyticsTopDevice;
use App\Models\GoogleAnalyticsTopLandingPage;
use App\Models\GoogleAnalyticsTopReferrer;
use App\Models\GoogleAnalyticsVisitor;
use Vormkracht10\Analytics\Facades\Analytics;
use Vormkracht10\Analytics\Period;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        dd(Auth::user());
  
        $totalOrders        = Order::count();
        $totalProducts      = Product::count();
        $activeCoupons      = Coupon::count();
        $totalAccounts      = User::where('type','user')->count();

        // Google Analytics
        $totalViews  = Analytics::sessions(Period::months(100));
        $last30DaysVisitors = GoogleAnalyticsVisitor::orderby('date', 'asc')->get();
        $topDevices = GoogleAnalyticsTopDevice::all();
        $topReferrers = GoogleAnalyticsTopReferrer::all();
        $topLandingPages = GoogleAnalyticsTopLandingPage::all();
        return view('admin.dashboard.index', 
               compact('totalOrders','totalProducts','activeCoupons','totalAccounts', 'topDevices', 'topReferrers', 
                        'last30DaysVisitors', 'topLandingPages','totalViews'));
    }
}
