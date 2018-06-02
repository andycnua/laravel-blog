<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class dashboard extends Controller
{
    //dashboard
    public function Dashboard()
    {
    	return view('admin.dashboard');
    }
}
