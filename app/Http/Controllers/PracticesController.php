<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class PracticesController extends Controller
{
    public function index(){
        // Customer::find(3)->delete();
        $customer=Customer::all();
        return view('practice.practice',compact('customer'));
    }
}
