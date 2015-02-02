<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Tokens extends Twilio\ListResource {

    /**
     * Create a new Token instance
     *
     * Example usage:
     *
     * .. code-block:: php
     *
     *      $client->account->tokens->create(array(
     *          "Ttl" => 100,
     *      ));
     *
     * :param array $params: a single array of parameters which is serialized and
     *      sent directly to the Twilio API.
     *
     */
    public function create($params = array()) {
        return parent::_create($params);
    }

}
