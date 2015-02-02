<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Queue
    extends Twilio\InstanceResource {

    protected function init($client, $uri) {
        $this->setupSubresources('members');
    }
}

