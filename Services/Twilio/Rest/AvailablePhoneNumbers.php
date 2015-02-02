<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class AvailablePhoneNumbers
    extends Twilio\ListResource
{
    public function getLocal($country) {
        $curried = new Twilio\PartialApplicationHelper();
        $curried->set(
            'getList',
            array($this, 'getList'),
            array($country, 'Local')
        );
        return $curried;
    }
    public function getTollFree($country) {
        $curried = new Twilio\PartialApplicationHelper();
        $curried->set(
            'getList',
            array($this, 'getList'),
            array($country, 'TollFree')
        );
        return $curried;
    }

    public function getMobile($country)
    {
        $curried = new Twilio\PartialApplicationHelper();
        $curried->set(
            'getList',
            array($this, 'getList'),
            array($country, 'Mobile')
        );
        return $curried;
    }

    /**
     * Get a list of available phone numbers.
     *
     * @param string $country The 2-digit country code you'd like to search for
     *    numbers e.g. ('US', 'CA', 'GB')
     * @param string $type The type of number ('Local', 'TollFree', or 'Mobile')
     * @return object The object representation of the resource
     */
    public function getList($country, $type, array $params = array())
    {
        return $this->client->retrieveData($this->uri . "/$country/$type", $params);
    }

    public function getResourceName($camelized = false) {
        // You can't page through the list of available phone numbers.
        $this->instance_name = 'AvailablePhoneNumber'; //TODO Namespaces - make sure this works
        return $camelized ? 'Countries' : 'countries';
    }
}
