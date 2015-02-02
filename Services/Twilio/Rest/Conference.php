<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Conference
    extends Twilio\InstanceResource
{
    protected function init($client, $uri)
    {
        $this->setupSubresources(
            'participants'
        );
    }
}
