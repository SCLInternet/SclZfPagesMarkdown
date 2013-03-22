<?php

namespace SclZfPagesMarkdown;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Module which provides basic static page display & management.
 *
 * @author Tom Oram
 */
class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ServiceProviderInterface
{
    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return array(
            'scl_zf_pages' => array(
                'formatters' => array(
                    'markdown' => 'SclZfPagesMarkdown\Formatter\Markdown',
                ),
            ),
        );
    }

    /**
     * @return array
     */
    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'SclZfPagesMarkdown\Formatter\Markdown' => 'SclZfPagesMarkdown\Formatter\Markdown',
            ),
        );
    }
}
