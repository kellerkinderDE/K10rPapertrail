<?php
namespace K10rPapertrail;

use K10rPapertrail\DependencyInjection\OverrideServiceCompilerPass;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class K10rPapertrail extends Plugin
{
    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new OverrideServiceCompilerPass());
    }

    /**
     * @param \Shopware\Components\Plugin\Context\InstallContext $context
     *
     * @throws \Exception
     */
    public function install(InstallContext $context)
    {
        if (!extension_loaded('sockets')) {
            throw new \Exception('PHP socket extension is required');
        }
    }
}
