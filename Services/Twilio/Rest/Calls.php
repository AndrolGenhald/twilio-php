<?php

namespace Services\Twilio\Rest;

use Services\Twilio;

class Calls
    extends Twilio\ListResource
{

    function init($client, $uri)
    {
        $this->setupSubresources(
            'feedback_summary'
        );
    }

    public static function isApplicationSid($value)
    {
        return strlen($value) == 34
            && !(strpos($value, "AP") === false);
    }

    public function create($from, $to, $url, array $params = array())
    {

        $params["To"] = $to;
        $params["From"] = $from;

        if (self::isApplicationSid($url)) {
            $params["ApplicationSid"] = $url;
        } else {
            $params["Url"] = $url;
        }

        return parent::_create($params);
    }

    /**
     * Create a feedback for a call.
     *
     * @param $callSid
     * @param $qualityScore
     * @param array $issue
     * @return Feedback
     */
    public function createFeedback($callSid, $qualityScore, array $issue = array())
    {
        $params["QualityScore"] = $qualityScore;
        $params["Issue"] = $issue;

        $feedbackUri = $this->uri . '/' . $callSid . '/Feedback';

        $response = $this->client->createData($feedbackUri, $params);
        return new Feedback($this->client, $feedbackUri, $response);
    }

    /**
     * Delete a feedback for a call.
     *
     * @param $callSid
     */
    public function deleteFeedback($callSid)
    {
        $feedbackUri = $this->uri . '/' . $callSid . '/Feedback';
        $this->client->deleteData($feedbackUri);
    }

    /**
     * Get a feedback for a call.
     *
     * @param $callSid
     * @return Feedback
     */
    public function getFeedback($callSid)
    {
        $feedbackUri = $this->uri . '/' . $callSid . '/Feedback';
        $response = $this->client->retrieveData($feedbackUri);
        return new Feedback($this->client, $feedbackUri, $response);
    }
}
