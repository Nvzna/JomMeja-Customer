<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function depan(){
        $customers = Customer::all();

        return view('customers.depan', ['customers' => $customers]) ;
    }
    
    public function tiktok(){
        return view('customers.tiktok');
    }

    public function instagram(){
        return view('customers.instagram');
    }

    public function community(){
        return view('customers.community');
    }

    public function review(){
        return view('customers.review');
    }
    public function fillReview(){
        return view('customers.fillReview');
    }

}
