<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Customer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class HomeController extends CommonController
{
    public function index()
    {
        return view('home.search');
    }
    //located at index page, for searching customer.(check if the customer is exist according to its phone number)
    public function search()
    {
        $input=Input::all();
        $result=Customer::where('phoneNo',$input['phoneNo'])->first();
        if($result) {
            session(['customer'=>$result]);
            return view('home.show')->withResult($result);
        }
        else
        {
            return view('home.add')->withResult($input['phoneNo']);
        }
    }
    //located at index page,create a new customer
    public function create()
    {
        $input=Input::except('_token');
        $validator = Validator::make($input,Customer::$rules
        );

        if ($validator->fails()) {
            return redirect()->withErrors($validator)->withReuslt($input['phoneNo']);
        }
        else
        {

            $customer=Customer::create($input);
            if($customer){
                session(['customer'=>$customer]);
                return view('home.show')->withResult($customer);
            }
            else{
              return back();
            }

        }
    }
}
