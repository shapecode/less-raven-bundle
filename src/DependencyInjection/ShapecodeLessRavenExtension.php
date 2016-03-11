<?php

namespace Shapecode\Bundle\LessRavenBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class ShapecodeLessRavenExtension
 * @package Shapecode\Bundle\LessRavenBundle\DependencyInjection
 * @author Nikita Loges
 */
class ShapecodeLessRavenExtension extends ConfigurableExtension
{
    /**
     * @inheritdoc
     */
    public function loadInternal(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('shapecode_less_raven.sentry_dsn', $configs['sentry_dsn']);
    }
}
