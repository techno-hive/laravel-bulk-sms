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
        dd("Hey guys. We're making progress");
    }
    public  function add($num,$num1){
        return $num + $num1;
    }
}
