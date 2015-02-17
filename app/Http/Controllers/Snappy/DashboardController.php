<?php  namespace SnapClock\Http\Controllers\Snappy; 

use SnapClock\Http\Controllers\Controller;

class DashboardController extends Controller {
    public function index()
    {
        return view('dashboard.index');
    }
}