<?php

namespace App\Service\LanguageService;

use App\Interface\Locator\LanguageInterface;

class English implements LanguageInterface
{
    public function getLanguage(): string
    {
        return "english";
    }
}