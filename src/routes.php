<?php

Route::group(['namespace' => 'TechnoHiveKenya\LaravelBulkSMS\Controllers'], function()
{
    Route::get('technohive-dashboard',['uses' => 'LaravelBulkSMSController@dashboard']);
    Route::get('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sms']);
    Route::post('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);

    Route::get('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@bulkSms']);
    Route::post('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@sendBulkSMS']);
    Route::get('test',function (){
        BulkSMS::sendSMS("Hey");
    });
})

?>