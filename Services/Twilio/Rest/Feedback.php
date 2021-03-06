<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Feedback extends Twilio\InstanceResource {

    public function __construct($client, $uri, $params = array()) {
        $this->instance_name = "Services\\Twilio\\Rest\\Feedback";
        return parent::__construct($client, $uri, $params);
    }

    /**
     * Create feedback for the parent call
     */
    public function create(array $params = array()) {
        $params = $this->client->createData($this->uri, $params);
        return new $this->instance_name($this->client, $this->uri, $params);
    }

    /**
     * Delete feedback for the parent call
     */
    public function delete() {
        $this->client->deleteData($this->uri);
    }

    /**
     * Fetch the feedback for the parent call
     */
    public function get() {
        return new $this->instance_name(
            $this->client, $this->uri
        );
    }

}
