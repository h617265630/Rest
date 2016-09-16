<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Customer;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function searchCustomer()
    {
        $data=[];
        $input=Input::all();
        $result=Customer::where('phone_no',$input['phoneno'])->get();
        if(count($result)>0)
        {
            $data=['status'=>1,'detail'=>$result[0]];
        }
        else{
            $data=['status'=>0];
        }
        return $data;
    }
}
