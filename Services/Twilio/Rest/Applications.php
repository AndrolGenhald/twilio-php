<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Applications
    extends Twilio\ListResource
{
    public function create($name, array $params = array())
    {
        return parent::_create(array(
            'FriendlyName' => $name
        ) + $params);
    }
}
