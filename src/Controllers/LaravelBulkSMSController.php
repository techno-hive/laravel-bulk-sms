<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use TechnoHiveKenya\LaravelBulkSMS\Services\BulkSMS;

class LaravelBulkSMSController extends Controller
{

    public function __construct()
    {
    }
    public function dashboard(){
        return view('laravel-bulk-sms::dashboard');

    }
    public  function sms(){

        return view('laravel-bulk-sms::sendsms');
    }
    public  function sendSMS(Request $request){
        $this->validate($request,
            ['phone_number'=>'required',
                'text_message'=>'required'
                ]);
//        dd($request->all());
        BulkSMS::sendSMS($request->phone_number,$request->text_message);


    }
    public  function add($num,$num1){
        return $num + $num1;
    }

}
