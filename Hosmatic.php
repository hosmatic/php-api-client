<?php

namespace hosmatic;

use HMCSW4\Client\HMCSW4;

class Hosmatic
{
  public function __construct(string $apiKey){
    return new HMCSW4("https://api.hosmatic.com", $apiKey);
  }
}