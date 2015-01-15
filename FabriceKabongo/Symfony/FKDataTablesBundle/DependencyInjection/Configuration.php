<?php

namespace FabriceKabongo\Symfony\FKDataTablesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('fkdatatables');

        $rootNode
                ->children()
                ->scalarNode('class')->defaultValue('FabriceKabongo\\Symfony\\FKDataTablesBundle\\Services\\PSS')->end()
                ->end();

        return $treeBuilder;
    }

}

?>
