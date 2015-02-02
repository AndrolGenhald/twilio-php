<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Participants
    extends Twilio\ListResource
{
    /* Participants are identified by CallSid, not like PI123 */
    public function getObjectFromJson($params, $idParam = "sid") {
        return parent::getObjectFromJson($params, "call_sid");
    }
}
