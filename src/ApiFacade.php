<?php namespace gouravbajaj0210\api;

use Illuminate\Support\Facades\Facade;

class ApiFacade extends Facade {
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'api';
    }
}