    <?php
namespace Darkin1\Intercom;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Intercom\IntercomClient;

class IntercomServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Don't register intercom if it is not configured.
        if (! getenv('INTERCOM_APP_ID') && ! getenv('INTERCOM_APP_KEY') && ! $this->app['config']->get('services.intercom')) {
            return;
        }

        $this->app->bind('intercom', function () {
            $appID  = getenv('INTERCOM_APP_ID')  ?: $app['config']->get('services.intercom.app_id');
            $apiKey = getenv('INTERCOM_APP_KEY') ?: $app['config']->get('services.intercom.api_key');

            return new IntercomClient($appID, $apiKey);
        });
    }
}