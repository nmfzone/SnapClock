<?php  namespace SnapClock\Http\Controllers\Snappy; 

use Illuminate\Http\Request;
use SnapClock\Http\Controllers\Controller;

class EmployeeController extends Controller {
    public function create()
    {
        return view('employee.form');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}