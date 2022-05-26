<?php

namespace App\Repository;

class PackageRepository
{
    public function search(?string $query = null): array
    {
        $packages = [
            [ 'name' => 'Turbo', 'color' => 'purple'],
            [ 'name' => 'Live Components', 'color' => 'red'],
            [ 'name' => 'Chart.js', 'color' => 'green'],
            [ 'name' => 'Typed', 'color' => 'yellow'],
            [ 'name' => 'Cropper.js', 'color' => 'blue'],
            [ 'name' => 'Dropzone', 'color' => 'magenta'],
            [ 'name' => 'Autocomplete', 'color' => 'purple'],
            [ 'name' => 'Twig Components', 'color' => 'red'],
        ];

        if (!$query) {
            return $packages;
        }

        return array_filter($packages, function($package) use ($query) {
            return str_contains(strtolower($package['name']), strtolower($query));
        });
    }
}
