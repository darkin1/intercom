<?php
/**
 * Created by PhpStorm.
 * User: dariusz
 * Date: 26.03.16
 * Time: 13:40
 */

namespace Darkin1\Intercom;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Intercom\IntercomBasicAuthClient;
class IntercomServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('intercom', function () {
            $intercom = IntercomBasicAuthClient::factory([
                'app_id' => Config::get('intercom.app_id'),
                'api_key' => Config::get('intercom.api_key'),
            ]);

            return new IntercomApi($intercom);
        });
    }
}