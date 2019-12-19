<?php

Route::group(['namespace' => 'TechnoHiveKenya\LaravelBulkSMS\Controllers'], function()
{
    Route::get('sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);
})

?>