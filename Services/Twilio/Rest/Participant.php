<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Participant
    extends Twilio\InstanceResource
{
    public function mute()
    {
        $this->update('Muted', 'true');
    }
}
