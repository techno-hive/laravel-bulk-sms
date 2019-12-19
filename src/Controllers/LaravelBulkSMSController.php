<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LaravelBulkSMSController extends Controller
{

    public function __construct()
    {
    }
    public  function sendSMS(){
        echo config('laravelbulksms.api_key');
        return view('laravel-bulk-sms::sendsms');
    }
    public  function add($num,$num1){
        return $num + $num1;
    }
}
