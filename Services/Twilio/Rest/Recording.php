<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Recording
    extends Twilio\InstanceResource
{
    protected function init($client, $uri) {
        $this->setupSubresources('transcriptions');
    }
}
