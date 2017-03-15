<?php
namespace K10rPapertrail\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class OverrideServiceCompilerPass implements CompilerPassInterface
{


    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $pluginLoggerDefinition = $container->getDefinition('pluginlogger');

        $pluginLoggerDefinition->addMethodCall(
            'pushHandler',
            [new Reference('k10r_papertrail.log.handler.papertrail')]
        );

        $coreLoggerDefinition = $container->getDefinition('corelogger');

        $coreLoggerDefinition->addMethodCall(
            'pushHandler',
            [new Reference('k10r_papertrail.log.handler.papertrail')]
        );
    }
}
