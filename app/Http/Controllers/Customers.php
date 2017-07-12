<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class Customers extends Controller
{
	public function getAllCustomers(){
		return "allez paris";

	}

	public function getCustomer(){
		return "c'est magique";
	}

	public function postForm(){
		return view ('resultForm');
	}

	public function addCustomer(Request $request){
        $query = $request->input('prenom');
        dd($query);
    }
};
    // public function getCustomers(){
    // 	$customers = Customers ::all();
    // 	dd($customers);
    // }
