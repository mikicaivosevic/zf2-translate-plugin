<?php
namespace ZfTranslate\Factory;

use Zend\Mvc\I18n\Translator;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfTranslate\Controller\Plugin\TranslatePlugin;

class TranslatePluginFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ServiceLocatorInterface $sm */
        $sm = $serviceLocator->getServiceLocator();
        /** @var Translator $translator */
        $translator = $sm->get('MvcTranslator');

        return new TranslatePlugin($translator);
    }

}