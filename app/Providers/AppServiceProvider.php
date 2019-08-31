<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Billing\CreditPaymentGateway;
use App\PostcardSendingService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function(){
            if(request()->has('credit')){
                return new CreditPaymentGateway('usd');
            }
            return new BankPaymentGateway('usd');
        });

        $this->app->singleton('Postcard', function($app){
            return new PostcardSendingService('us', 4, 6);
        });
    }
}
