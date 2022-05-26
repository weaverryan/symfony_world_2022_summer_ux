<?php

namespace App\Repository;

class PackageRepository
{
    public function findAll(): array
    {
        return [
            [ 'name' => 'Turbo', 'color' => 'purple'],
            [ 'name' => 'Live Components', 'color' => 'red'],
            [ 'name' => 'Chart.js', 'color' => 'green'],
            [ 'name' => 'Typed', 'color' => 'yellow'],
            [ 'name' => 'Cropper.js', 'color' => 'blue'],
            [ 'name' => 'Dropzone', 'color' => 'magenta'],
            [ 'name' => 'Autocomplete', 'color' => 'purple'],
            [ 'name' => 'Twig Components', 'color' => 'red'],
        ];
    }
}
