<?php

Route::get('send-sms',function (){
    echo "Hello 2020";
});

Route::get('add/{a}/{b}','technohive-kenya/laravel-bulk-sms/controllers/LaravelBulkSMSController@add');
Route::get('testview',function(){
    return view('laravel-bulk-sms::sendsms');
});
Route::group(['namespace' => 'TechnoHiveKenya\LaravelBulkSMS\Controllers'], function()
{
    Route::get('slap', ['uses' => 'LaravelBulkSMSController@sendSMS']);
})

?>