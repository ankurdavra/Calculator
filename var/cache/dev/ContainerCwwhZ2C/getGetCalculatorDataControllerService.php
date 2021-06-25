<?php

namespace ContainerCwwhZ2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCalculatorDataControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GetCalculatorDataController' shared autowired service.
     *
     * @return \App\Controller\GetCalculatorDataController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GetCalculatorDataController.php';

        $container->services['App\\Controller\\GetCalculatorDataController'] = $instance = new \App\Controller\GetCalculatorDataController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\GetCalculatorDataController', $container));

        return $instance;
    }
}
