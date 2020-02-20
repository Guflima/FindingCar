<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\User;
use App\Observers\UserObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        blade::component('components.tableOptions', 'tableOptions');
        blade::component('components.tableAddPre', 'tableAddPre');
        blade::component('components.tableAddAgendar', 'tableAddAgendar');
        blade::component('components.tableAddReservarEspaco', 'tableAddReservarEspaco');
        blade::component('components.addEmpresa', 'addEmpresa');
        blade::component('components.submitCreate', 'submitCreate');
        blade::component('components.voltar', 'voltar');
    }
}
