<?php

namespace App\Controller;

use App\Service\AcceptLanguage;
use App\Service\Locator\LanguageServiceLocator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/language', name: 'language_controller')]
class LanguageController extends AbstractController
{
    public function __construct(
        private LanguageServiceLocator $languageServiceLocator,
        private AcceptLanguage $acceptLanguage,
    ) {
    }

    #[Route('/', name: 'app_service_locator_discover')]
    public function getLanguageAction(Request $request): JsonResponse
    {
        $locale = $this->acceptLanguage->getMainLanguage($request->getLanguages());

        $languageToUse = $this->languageServiceLocator->determineLanguageToUse($locale);

        return $this->json([
            'language' => $languageToUse,
        ]);
    }
}
