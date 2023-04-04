<?php

namespace ContainerXI6CZla;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_EngineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.engine' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRendererEngine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        $a = ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService'));

        if (isset($container->privates['twig.form.engine'])) {
            return $container->privates['twig.form.engine'];
        }

        return $container->privates['twig.form.engine'] = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($container->parameters['twig.form.resources'], $a);
    }
}
