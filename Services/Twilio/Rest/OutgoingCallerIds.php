<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class OutgoingCallerIds
    extends Twilio\ListResource
{
    public function create($phoneNumber, array $params = array())
    {
        return parent::_create(array(
            'PhoneNumber' => $phoneNumber,
        ) + $params);
    }
}
