<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013 - 2016 Cross Solution (http://cross-solution.de)
 * @author cbleek
 * @license   MIT
 */

namespace Geo\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Geo\Controller\IndexController;
use Geo\Options\ModuleOptions;


class IndexControllerFactory implements FactoryInterface
{
    /**
     * Create a IndexController controller
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     *
     * @return IndexController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var ModuleOptions $options  */
        $options = $container->get('Geo/Options');
        $controller = new IndexController($options);
        return $controller;
    }

    /**
     * Create controller
     *
     * @param ServiceLocatorInterface $controllerManager
     *
     * @return IndexController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        /* @var \Zend\Mvc\Controller\PluginManager $controllerManager */
        return $this($controllerManager->getServiceLocator(), IndexController::class);
    }
}