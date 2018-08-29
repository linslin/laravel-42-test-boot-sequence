<?php

namespace App\Modules;

use \Exception;
use \Route;
use \Str;
use \View;
use App\Models\Host;
use Illuminate\Support\ServiceProvider;

/**
 * Class BaseModule
 * @package App\Modules
 */
abstract class BaseModule extends ServiceProvider
{

    /**
     * Eager load all modules by default
     *
     * @see http://laravel.com/docs/packages#deferred-providers
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * @return $this|void
     * @throws Exception
     */
    public function boot()
    {
        var_dump('-> Inside BaseModule boot()');
    }


    /**
     * @return $this|void
     * @throws Exception
     */
    public function register()
    {

        var_dump('-> Inside BaseModule register()');
    }

    /**
     *
     * @return void
     */
    public function init()
    {

    }
}
