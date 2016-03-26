<?php

namespace App\Custom\Intercom;

use Intercom\IntercomBasicAuthClient;

/**
 * Class IntercomApi
 * @package App\Custom\Intercom
 */
class IntercomApi
{
    /**
     * @var \Guzzle\Service\Client|IntercomBasicAuthClient
     */
    protected $intercom;

    /**
     * @param $intercom
     */
    public function __construct(IntercomBasicAuthClient $intercom)
    {
        $this->intercom = $intercom;
    }


    /**
     * @param $method
     * @param array $args
     * @return mixed
     */
    public function __call($method, array $args)
    {
        return call_user_func_array([$this->intercom, $method], $args);
    }

    /**
     * @param array $event
     */
//    public function createEvent($event = [])
//    {
//
//        if (!isset($event['email'])) {
//            $event['email'] = Auth::user()->email;
//        }
//
//        if (!isset($event['created_at'])) {
//            $event['created_at'] = time();
//        }
//
//        return $this->intercom->createEvent($event);
//    }
}