<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Address
    extends Twilio\InstanceResource
{
    protected function init($client, $uri)
    {
        $this->setupSubresources(
            'dependent_phone_numbers'
        );
    }
}
