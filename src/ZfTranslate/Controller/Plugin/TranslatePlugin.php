<?php
namespace ZfTranslate\Controller\Plugin;

use Zend\I18n\Translator\TranslatorInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class TranslatePlugin extends AbstractPlugin
{
    /** @var  TranslatorInterface $translator */
    private $translator;

    /**
     * TranslatePlugin constructor.
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @param $str
     * @param null $locale
     * @return string
     */
    public function __invoke($str, $locale = null)
    {
        return $locale ? $this->translator->translate($str, $locale) : $this->translator->translate($str);
    }
}
