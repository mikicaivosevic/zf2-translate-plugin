<?php
namespace ZfTranslate\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Mvc\I18n\Translator;

class TranslatePlugin extends AbstractPlugin
{
    /** @var  Translator $translator */
    private $translator;

    /**
     * TranslatePlugin constructor.
     * @param Translator $translator
     */
    public function __construct(Translator $translator)
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