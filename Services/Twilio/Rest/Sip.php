<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

/**
 * For Linux filename compatibility, this file needs to be named Sip.php, or
 * camelize() needs to be special cased in setupSubresources
 */
class Sip extends Twilio\InstanceResource {
    protected function init($client, $uri) {
        $this->setupSubresources(
            'domains',
            'ip_access_control_lists',
            'credential_lists'
        );
    }

    public function getResourceName($camelized = false) {
        return "SIP";
    }
}
