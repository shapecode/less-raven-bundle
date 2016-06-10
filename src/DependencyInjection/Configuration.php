<?php

namespace Shapecode\Bundle\LessRavenBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Shapecode\Bundle\LessRavenBundle\DependencyInjection
 * @author  Nikita Loges
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shapecode_less_raven');

        $rootNode
            ->children()
            ->scalarNode('sentry_dsn')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
