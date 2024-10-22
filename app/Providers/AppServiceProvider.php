<?php

namespace App\Providers;

use App\Actions\altasPdf;
use App\Actions\certificatePdf;
use App\Actions\VacationPdf;
use App\Actions\requerimientosPdf;
use App\Actions\finiquitoPdf;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Voyager::addAction(requerimientosPdf::class);
        Voyager::addAction(altasPdf::class);
        Voyager::addAction(VacationPdf::class);
        Voyager::addAction(finiquitoPdf::class);
        Voyager::addAction(certificatePdf::class);
    }
}
