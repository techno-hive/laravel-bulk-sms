<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Facades;

use Illuminate\Support\Facades\Facade;

/**
* Class BulkSMSFacade
* @package TechnoHiveKenya\LaravelBulkSMS\
*/
class BulkSMSFacade extends Facade
{
/**
* @return string
*/
protected static function getFacadeAccessor()
{
return 'bulksms';
}
}