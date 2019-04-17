<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ExampleService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ExampleService';
    }
}
