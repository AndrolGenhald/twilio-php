<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class ConnectApps
    extends Twilio\ListResource
{
    public function create($name, array $params = array())
    {
        throw new \BadMethodCallException('Not allowed');
    }
}
