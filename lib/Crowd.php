<?php

namespace Crowd;

use Crowd\Exceptions\CrowdException;
use GuzzleHttp\Client;

/**
 * Class Crowd
 * @package Crowd
 */
class Crowd {

    protected $crowdUrl, $crowdUser, $crowdPass, $client;

    /**
     * @param $crowdUrl
     * @param $crowdUser
     * @param $crowdPass
     * @throws CrowdException
     */
    public function __construct($crowdUrl, $crowdUser, $crowdPass)
    {
        if(!isset($crowdUrl) or !isset($crowdUser) or !isset($crowdPass))
            throw new CrowdException('Not all parameters have been set!');

        $this->crowdUrl = $crowdUrl;
        $this->crowdUser = $crowdUser;
        $this->crowdPass = $crowdPass;
        $this->client = new Client();
    }
}