<?php

namespace App\Tests\Service\LanguageService;

use App\Service\LanguageService\French;
use PHPUnit\Framework\TestCase;

class FrenchTest extends TestCase
{
    private French $frenchService;

    public function setUp(): void
    {
        $this->frenchService = new French();
    }

    /**
     * @return void
     */
    public function testGetLanguage(): void
    {
        $this->assertSame('french', $this->frenchService->getLanguage());
    }
}
