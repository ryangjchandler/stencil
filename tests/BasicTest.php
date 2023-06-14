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