<?php

namespace App\Service\LanguageService;

use App\Interface\Locator\LanguageInterface;

class French implements LanguageInterface
{
    public function getLanguage(): string
    {
        return "french";
    }
}