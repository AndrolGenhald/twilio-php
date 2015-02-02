<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class SmsMessages
    extends Twilio\ListResource
{
    public function __construct($client, $uri) {
        $uri = preg_replace("#SmsMessages#", "SMS/Messages", $uri);
        parent::__construct($client, $uri);
    }

    function create($from, $to, $body, array $params = array()) {
        return parent::_create(array(
            'From' => $from,
            'To' => $to,
            'Body' => $body
        ) + $params);
    }
}
