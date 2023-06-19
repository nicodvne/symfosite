<?php

namespace App\Interface\Locator;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('LanguageService')]
interface LanguageInterface
{
    public function getLanguage(): String;
}
