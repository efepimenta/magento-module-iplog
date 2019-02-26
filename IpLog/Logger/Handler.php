<?php

namespace Efepimenta\IpLog\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $fileName = '/var/log/ip_log.log';
    protected $loggerType = Logger::INFO;
}