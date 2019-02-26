<?php

namespace Efepimenta\IpLog\Block;

use Efepimenta\IpLog\Logger\Logger;
use Magento\Framework\View\Element\Template;
use Magento\Framework\App\ObjectManager;

class IpBlock extends Template
{

    /**
     * @var Logger
     */
    private $logger;

    public function __construct(
        Template\Context $context,
        Logger $logger,
        array $data = []
    )
    {
        $this->logger = $logger;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getIp()
    {
        $om = ObjectManager::getInstance();
        $obj = $om->get('Magento\Framework\HTTP\PhpEnvironment\RemoteAddress');
        $ip = $obj->getRemoteAddress();
        $this->logger->write("IP: {$ip}");
        return $ip;
    }
}