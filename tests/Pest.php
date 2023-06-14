<?php

use Stencil\Stencil;

function stencil(string $template, array $data = []): string
{
    static $stencil = null;

    if ($stencil === null) {
        $stencil = new Stencil(__DIR__ . '/templates');
    }

    return $stencil->render($template, $data);
}