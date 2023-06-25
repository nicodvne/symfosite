<?php

namespace App\Interface\Locator;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

interface LanguageInterface
{
    public function getLanguage(): String;
}
