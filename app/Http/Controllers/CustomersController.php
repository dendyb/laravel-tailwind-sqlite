<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    //list customer
    public function list()
    {
        $customers = Customer::all();   // ambil semua data dari db
        //dd($customers)                // testing tampilan 

        return view('customers', [      // panggil customer
            'customers' => $customers,  // pindah data ke variabel
        ]);
    }

    //store customer
    public function store() 
    {

        //validation
        $data = request()->validate([
            'name' => 'required|min:3', // tambahan validasi minimal 3 karakter
            'email' => 'required|email'
        ]);

        // tambahan notif / feedback hasil validasi ada di view customers.blade


        // default to input new data without validation
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email'); // jangan lupa migration

        $customer->save();

        return back();

        //dd(request('name')); //testing post / store

    }




}
