<?php

namespace App\Services;


class Twitter
{
    protected  $apikey;

    public  function  __construct($apiKey)
    {
        $this->apikey = $apiKey;
    }
}