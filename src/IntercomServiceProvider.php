<?php

namespace Darkin1\Intercom;

use Intercom\IntercomClient;
use Darkin1\Intercom\Facades\Intercom;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class IntercomServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Allow users to publish config to override the defaults.
        $this->publishes([
            __DIR__.'/../config/intercom.php' => config_path('intercom.php'),
        ], 'darkin1/intercom');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Use the provided config as default.
        $this->mergeConfigFrom(
            __DIR__.'/../config/intercom.php', 'intercom'
        );

        $this->app->singleton('intercom', function ($app) {
            $accessToken = $app['config']->get('intercom.access_token');

            $intercom = new IntercomClient($accessToken, null);

            return new IntercomApi($intercom);
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Intercom', Intercom::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['intercom'];
    }
}
