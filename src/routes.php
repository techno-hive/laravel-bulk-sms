<?php

Route::group(['namespace' => 'TechnoHiveKenya\LaravelBulkSMS\Controllers'], function()
{
    Route::get('dashboard',['uses' => 'LaravelBulkSMSController@dashboard']);
    Route::get('sendsms', ['uses' => 'LaravelBulkSMSController@sms']);
    Route::post('sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);
})

?>