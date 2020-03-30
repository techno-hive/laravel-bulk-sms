<?php
namespace TechnoHiveKenya\LaravelBulkSMS\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BulkSMS
{
    public function dump()
    {
        dd("Is this sms should be send?");
    }
    public static function sendSMS($mobile,$message){
        $partnerID = config('laravelbulksms.partner_id');
        $apikey = config('laravelbulksms.api_key');
        $shortcode = config('laravelbulksms.sender_id');

//        dd($partnerID.$apikey.$shortcode);

        // $mobile = "254712345678"; // Bulk messages can be comma separated
        // $message = "This is a test message + = # special characters @ _ -";

        $finalURL = "https://bulksms.technohive.co.ke/api/services/sendsms/?apikey=" . urlencode($apikey) . "&partnerID=" . urlencode($partnerID) . "&message=" . urlencode($message) . "&shortcode=$shortcode&mobile=$mobile";
        $ch = curl_init();
        \curl_setopt($ch, CURLOPT_URL, $finalURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

//        return $response;

        $res= json_decode($response,true);

        $now = new Carbon();
        $status = '';
        $des="";

        if(isset($res['respose-code'])){
            $des=$res['response-description'];

            DB::table('technohive_sms')->insert(
                ['response_code' => $res['respose-code'], 'response_description' => $res['response-description'],'created_at'=>$now->format('Y-m-d H:i:s'),
                    'updated_at'=>$now->format('Y-m-d H:i:s')]

            );



        }elseif(isset($res['response-code'])){
            $des=$res['response-description'];
            DB::table('technohive_sms')->insert(
                ['response_code' => $res['response-code'], 'response_description' => $res['response-description'],'created_at'=>$now->format('Y-m-d H:i:s'),
                    'updated_at'=>$now->format('Y-m-d H:i:s')]

            );


        }else{

            foreach ($res['responses'] as $res){
                $des=$res['response-description'];
                $res = ['response_code' => $res['respose-code'], 'response_description' => $res['response-description'],
                    'mobile_number' => $res['mobile'], 'message_id' => $res['messageid'],
                    'network_id' => $res['networkid'],'created_at'=>$now->format('Y-m-d H:i:s'),
                    'updated_at'=>$now->format('Y-m-d H:i:s') ];
                DB::table('technohive_sms')->insert($res);
            }
        }





    return $des;



    }
}
?>