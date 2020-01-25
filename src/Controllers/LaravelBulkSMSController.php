<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
            [
                'phone_number'=>'required',
                'text_message'=>'required'
                ]);

       $res= BulkSMS::sendSMS($request->phone_number,$request->text_message);



        return back()->with('status',$res);




    }
    public  function add($num,$num1){
        return $num + $num1;
    }

}
