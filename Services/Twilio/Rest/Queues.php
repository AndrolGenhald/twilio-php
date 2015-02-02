<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Queues
    extends Twilio\ListResource
{
    /**
     * Create a new Queue
     *
     * @param string $friendly_name The name of this queue
     * @param array $params A list of optional parameters, and their values
     * @return Services_Twilio_Rest_Queue The created Queue
     */
    function create($friendly_name, array $params = array()) {
        return parent::_create(array(
            'FriendlyName' => $friendly_name,
        ) + $params);
    }
}

