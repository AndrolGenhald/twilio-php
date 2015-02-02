<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class ShortCodes
    extends Twilio\ListResource
{
    public function __construct($client, $uri) {
        $uri = preg_replace("#ShortCodes#", "SMS/ShortCodes", $uri);
        parent::__construct($client, $uri);
    }
}
