<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class CredentialListMappings extends Twilio\SIPListResource {

    /**
     * Creates a new CredentialListMapping instance
     *
     * Example usage:
     *
     * .. code-block:: php
     *
     *      $client->account->sip->domains->get('SDXXX')->credential_list_mappings->create("CLXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
     *
     * :param string $credential_list_sid: the sid of the CredentialList you're adding to this domain.
     * :param array $params: a single array of parameters which is serialized and
     *      sent directly to the Twilio API.
     */
    public function create($credential_list_sid, $params = array()) {
        return parent::_create(array(
            'CredentialListSid' => $credential_list_sid,
        ) + $params);
    }
}

