<?php

namespace App\Service\Locator;

use App\Exceptions\LanguageException;
use App\Interface\Locator\LanguageInterface;
use App\Service\LanguageService\English;
use App\Service\LanguageService\French;
use Psr\Container\ContainerInterface;
use Symfony\Config\TwigExtra\StringConfig;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class LanguageServiceLocator implements ServiceSubscriberInterface
{
    public function __construct(ContainerInterface $locator)
    {
        $this->locator = $locator;
    }

    public function determineLanguageToUse(string $language): String
    {
        if ($this->locator->has($language)) {
            $languageService = $this->locator->get($language);

            return $languageService->getLanguage();
        }

        throw new LanguageException();
    }

    public static function getSubscribedServices(): array
    {
        return [
            'fr' => French::class,
            'en' => English::class,
        ];
    }
}