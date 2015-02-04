<?php

use Services\Twilio;
use \Mockery as m;

class AccountsTest extends PHPUnit_Framework_TestCase
{
    protected $formHeaders = array('Content-Type' => 'application/x-www-form-urlencoded');
    function testPost()
    {
        $http = m::mock(new Twilio\TinyHttp);
        $http->shouldReceive('post')->once()
            ->with('/2010-04-01/Accounts.json',
                $this->formHeaders, 'FriendlyName=foo')
            ->andReturn(array(200, array('Content-Type' => 'application/json'),
                json_encode(array('sid' => 'AC345'))
            ));
        $client = new Twilio('AC123', '123', '2010-04-01', $http);
        $account = $client->accounts->create(array(
            'FriendlyName' => 'foo',
        ));
        $this->assertEquals('AC345', $account->sid);
    }

    function tearDown()
    {
        m::close();
    }
}

