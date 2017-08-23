<?php

namespace Shapecode\Bundle\LessRavenBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class ShapecodeLessRavenExtension
 *
 * @package Shapecode\Bundle\LessRavenBundle\DependencyInjection
 * @author  Nikita Loges
 */
class ShapecodeLessRavenExtension extends ConfigurableExtension
{
    /**
     * @inheritdoc
     */
    public function loadInternal(array $config, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('shapecode_less_raven.sentry_dsn', $configs['sentry_dsn']);
    }
}
