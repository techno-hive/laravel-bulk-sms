<?php
namespace TechnoHiveKenya\LaravelBulkSMS\Services;

class BulkSMS
{
    public function dump()
    {
        dd("Is this sms should be send?");
    }
    public  function sendSMS($id){
        dd(config('laravelbulksms.api_key'));

    }
}
?>