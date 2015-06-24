<?php

namespace Crowd;

class Crowd {

    protected $crowdUrl, $crowdUser, $crowdPass, $client;

    public function __construct($crowdUrl, $crowdUser, $crowdPass)
    {
        $this->crowdUrl = $crowdUrl;
        $this->crowdUser = $crowdUser;
        $this->crowdPass = $crowdPass;
        $this->client = new
    }
}