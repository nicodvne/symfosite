<?php

namespace App\Service;

class AcceptLanguage
{
    public function getMainLanguage(array $acceptLanguages): string
    {
        foreach ($acceptLanguages as $acceptLanguage) {
            $locale = explode(';', $acceptLanguage)[0];

            if (preg_match('#^[a-z]{2}_[A-Z]{2}$#', $locale)) {
                $locale = substr($locale, 0, 2);
            }

            if (in_array($locale, $this->getAcceptedLanguages())) {
                return $locale;
            }
        }

        return $this->getDefaultLanguage();
    }

    private function getAcceptedLanguages(): array
    {
        return ['fr', 'en'];
    }

    private function getDefaultLanguage(): string
    {
        return 'fr';
    }
}
