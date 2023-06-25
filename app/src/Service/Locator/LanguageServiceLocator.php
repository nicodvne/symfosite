<?php

namespace App\Service\Locator;

use App\Exceptions\LanguageException;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Attribute\TaggedLocator;

class LanguageServiceLocator
{
    public function __construct(
        #[TaggedLocator('app.language_service', indexAttribute: 'key')]
        private ContainerInterface $locator
    ){
    }

    public function determineLanguageToUse(string $language): String
    {
        if ($this->locator->has($language)) {
            $languageService = $this->locator->get($language);

            return $languageService->getLanguage();
        }

        throw new LanguageException();
    }
}
