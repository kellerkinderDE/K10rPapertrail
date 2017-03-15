<?php

namespace K10rPapertrail\Log\Handler;

use Monolog\Handler\NullHandler;
use Monolog\Handler\SyslogUdpHandler;

class PapertrailHandlerFactory
{
    /**
     * @param \Shopware_Components_Config $config
     *
     * @return \Monolog\Handler\SyslogUdpHandler
     */
    public function createHandler(\Shopware_Components_Config $config)
    {
        $host = $config->getByNamespace('K10rPapertrail', 'papertrailHost');
        $port = $config->getByNamespace('K10rPapertrail', 'papertrailPort');

        return new SyslogUdpHandler($host, $port);
    }
}
