<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Account extends Twilio\InstanceResource {

    protected function init($client, $uri) {
        $this->setupSubresources(
            'applications',
            'available_phone_numbers',
            'outgoing_caller_ids',
            'calls',
            'conferences',
            'incoming_phone_numbers',
            'media',
            'messages',
            'notifications',
            'outgoing_callerids',
            'recordings',
            'sms_messages',
            'short_codes',
            'tokens',
            'transcriptions',
            'connect_apps',
            'authorized_connect_apps',
            'usage_records',
            'usage_triggers',
            'queues',
            'sip',
            'addresses'
        );

        $this->sandbox = new Sandbox(
            $client, $uri . '/Sandbox'
        );
    }
}
