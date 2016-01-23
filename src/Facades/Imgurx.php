<?php

namespace Nahid\Imgurx\Facades;

use Illuminate\Support\Facades\Facade;

class Imgurx extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'imgurx';
    }
}