<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class UsageRecords extends Twilio\TimeRangeResource {

    public function init($client, $uri) {
        $this->setupSubresources(
            'today',
            'yesterday',
            'all_time',
            'this_month',
            'last_month',
            'daily',
            'monthly',
            'yearly'
        );
    }
}

class Today extends Twilio\TimeRangeResource { } 

class Yesterday extends Twilio\TimeRangeResource { }

class LastMonth extends Twilio\TimeRangeResource { }

class ThisMonth extends Twilio\TimeRangeResource { }

class AllTime extends Twilio\TimeRangeResource { }

class Daily extends Twilio\UsageResource { }

class Monthly extends Twilio\UsageResource { }

class Yearly extends Twilio\UsageResource { }
