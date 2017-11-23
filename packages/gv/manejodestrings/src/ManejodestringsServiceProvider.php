<?php

namespace Gv\Manejodestrings; // Antes: App\Providers

use Illuminate\Support\ServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class ManejodestringsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include base_path().'/routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
