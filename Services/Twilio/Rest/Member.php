<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Member
    extends Twilio\InstanceResource
{

    /**
     * Dequeue this member
     *
     * @param string $url The Twiml URL to play for this member, after 
     *      dequeueing them
     * @param string $method The HTTP method to use when fetching the Twiml 
     *      URL. Defaults to POST.
     * @return Member The dequeued member
     */
    public function dequeue($url, $method = 'POST') {
        return self::update(array(
            'Url' => $url,
            'Method' => $method,
        ));
    }
}
