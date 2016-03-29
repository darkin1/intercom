<?php

namespace Darkin1\Intercom;

use Intercom\IntercomBasicAuthClient;

/**
 * Class IntercomApi
 * @package Darkin1\Intercom
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
     * @param       $method
     * @param array $args
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        return call_user_func_array([$this->intercom, $method], $args);
    }

}