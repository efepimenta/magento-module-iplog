<?php

namespace Efepimenta\IpLog\Logger;

class Logger extends \Monolog\Logger
{

    public function write($data) {
        return $this->alert($data);
    }
}