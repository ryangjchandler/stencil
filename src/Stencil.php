<?php

namespace Stencil;

use Stencil\Exceptions\TemplateNotFoundException;

class Stencil
{
    public function __construct(
        protected string $path,
    ) {}

    public function render(string $template, array $data = []): string
    {
        $path = $this->path . DIRECTORY_SEPARATOR . $template . '.php';

        if (! file_exists($path)) {
            throw TemplateNotFoundException::make($template);
        }

        return (new Template($path, $data))->render();
    }
}