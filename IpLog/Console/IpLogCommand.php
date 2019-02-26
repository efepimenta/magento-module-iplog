<?php

namespace Efepimenta\IpLog\Console;

use Efepimenta\IpLog\Logger\Logger;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class IpLogCommand extends Command
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger )
    {
        $this->logger = $logger;
        parent::__construct();

    }

    /**
     * {@inheritdoc}v
     */
    protected function configure()
    {
        $this->setName('efepimenta:log:ip')
            ->setDescription('Usando logs customizados no Magento. Este será salvo em var/log/magenteiro.log');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Logar o Ip do cliente (não captura pelo console)');
        $this->logger->alert("Ip: 0.0.0.0");
        return Cli::RETURN_SUCCESS;
    }

}