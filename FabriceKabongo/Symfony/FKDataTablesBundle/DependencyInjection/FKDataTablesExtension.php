<?php

namespace FabriceKabongo\Symfony\FKDataTablesBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class FKDataTablesExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->registerExtension($this);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('config.yml');
        return $loader;
    }

    public function getAlias()
    {
        return 'fk_data_tables';
    }
    
    public function getNamespace(){
        return "fkdatatables";
    }
}
