<?php

namespace App\Twig;

use App\Repository\PackageRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('search_packages')]
class SearchPackagesComponent
{
    public string $query = '';

    public function __construct(
        private PackageRepository $packageRepository
    )
    {
    }

    public function getPackages(): array
    {
        return $this->packageRepository->search($this->query);
    }
}
