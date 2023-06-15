<?php

it('can render a basic template', function () {
    expect(stencil('hello', ['name' => 'Ryan']))
        ->toBeString()
        ->toBe(<<<'HTML'
        <h1>
            Hello, Ryan!
        </h1>
        HTML);
});

it('can include another template', function () {
    expect(stencil('include-wrapper'))
        ->toBeString()
        ->toBe(<<<'HTML'
        Hello, world!
        HTML);
});

it('can include another template with data', function () {
    expect(stencil('include-data-wrapper'))
        ->toBeString()
        ->toBe(<<<'HTML'
        <h1>
            Hello, Ryan!
        </h1>
        HTML);
});