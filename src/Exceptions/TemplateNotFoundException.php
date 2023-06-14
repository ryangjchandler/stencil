<?php

namespace Stencil\Exceptions;

use Exception;

final class TemplateNotFoundException extends Exception
{
    public static function make(string $template): self
    {
        return new self(sprintf('Unable to locate template %s', $template));
    }
}