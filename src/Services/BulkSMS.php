<?php
namespace TechnoHiveKenya\LaravelBulkSMS\Services;

class BulkSMS
{
    public function dump()
    {
        dd("Is this sms should be send?");
    }
    public  function sendSMS($mobile,$message){
        $partnerID = config('laravelbulksms.partner_id');
        $apikey = config('laravelbulksms.api_key');
        $shortcode = config('laravelbulksms.sender_id');

        // $mobile = "254712345678"; // Bulk messages can be comma separated
        // $message = "This is a test message + = # special characters @ _ -";

        $finalURL = "https://mysms.celcomafrica.com/api/services/sendsms/?apikey=" . urlencode($apikey) . "&partnerID=" . urlencode($partnerID) . "&message=" . urlencode($message) . "&shortcode=$shortcode&mobile=$mobile";
        $ch = curl_init();
        \curl_setopt($ch, CURLOPT_URL, $finalURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        echo "Response: $response";

    }
}
?>