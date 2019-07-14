<?php

namespace Darkin1\Intercom;

/**
 * Class IntercomApi.
 */
class IntercomApi
{
    /**
     * @var \Intercom\IntercomClient
     */
    protected $intercom;

    /**
     * @param $intercom
     */
    public function __construct($intercom)
    {
        $this->intercom = $intercom;
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        if (method_exists($this->intercom, $method)) {
            return call_user_func_array([$this->intercom, $method], $args);
        }

        return $this->intercom->{$method};
    }
}
