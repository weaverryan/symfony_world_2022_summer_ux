<?php

namespace App\Twig;

use App\Repository\PackageRepository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('search_packages')]
class SearchPackagesComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
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
