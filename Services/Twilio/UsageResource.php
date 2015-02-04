<?php

namespace Services\Twilio;

/** 
 * Parent class for all UsageRecord subclasses
 * @author Kevin Burke <kevin@twilio.com>
 * @license  http://creativecommons.org/licenses/MIT/ MIT
 * @link     http://pear.php.net/package/Services_Twilio
 */
class UsageResource extends ListResource {
    public function getResourceName($camelized = false) {
        $this->instance_name = 'Services\\Twilio\\Rest\\UsageRecord';
        return $camelized ? 'UsageRecords' : 'usage_records';
    }

    public function __construct($client, $uri) {
        $uri = preg_replace("#UsageRecords#", "Usage/Records", $uri);
        parent::__construct($client, $uri);
    }
}

