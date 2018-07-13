<?php
namespace ZfTranslate\Factory;

use Interop\Container\ContainerInterface;
use Zend\I18n\Translator\TranslatorInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZfTranslate\Controller\Plugin\TranslatePlugin;

class TranslatePluginFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $translator = $container->get(TranslatorInterface::class);
        return new TranslatePlugin($translator);
    }
}
