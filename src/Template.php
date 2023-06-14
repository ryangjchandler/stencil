<?php

namespace Stencil;

class Template
{
    public function __construct(
        protected string $path,
        protected array $data = [],
    ) {}

    public function e(?string $value): string
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    public function render(): string
    {
        ob_start();

        (function () {
            extract($this->data);
            include $this->path;
        })();

        return ob_get_clean();
    }
}