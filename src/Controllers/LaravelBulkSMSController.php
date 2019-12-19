<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use BulkSMS;
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
    public  function sendSMS(){
        BulkSMS::sendSMS("Hey");


    }
    public  function add($num,$num1){
        return $num + $num1;
    }

}
