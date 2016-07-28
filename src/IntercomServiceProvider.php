<?php
namespace Darkin1\Intercom;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Intercom\IntercomClient;

class IntercomServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
            $appID  = $app['config']->get('intercom.app_id');
            $apiKey = $app['config']->get('intercom.api_key');

            $intercom = new IntercomClient($appID, $apiKey);

            return new IntercomApi($intercom);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('intercom');
    }
}