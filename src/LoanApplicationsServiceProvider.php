<?php

namespace Armony\LoanApplications;

use Illuminate\Support\ServiceProvider;

class LoanApplicationsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // include __DIR__.'/routes/web.php';
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/loans/', 'loans');
        $this->app->make('Armony\LoanApplications\TimezonesController');
        $this->app->make('Armony\LoanApplications\LoanApplicationsController');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}