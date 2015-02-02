<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

/**
 * For more information, see the `Account List Resource
 * <http://www.twilio.com/docs/api/rest/account#list>`_ documentation.
 */
class Accounts extends Twilio\ListResource {

    /**
     * Create a new subaccount.
     *
     * :param array $params: An array of parameters describing the new
     *      subaccount. The ``$params`` array can contain the following keys:
     *
     *      *FriendlyName*
     *          A description of this account, up to 64 characters long
     *
     * :returns: The new subaccount
     * :rtype: :php:class:`Services_Twilio_Rest_Account`
     *
     */
    public function create($params = array()) {
        return parent::_create($params);
    }
}
