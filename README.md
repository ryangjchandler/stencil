# Stencil

Stencil is a simple templating engine for PHP that was written for a series of blog posts.

## Usage

```php
$stencil = new Stencil(
    path: __DIR__ . '/../templates',
);

echo $stencil->render('example', [
    'name' => 'Ryan',
]);
```

Stencil accepts the directory that template files are located in.

The `render()` method accepts the template name and an array of data variables that will be used to render the template.

> Stencil will search for `.php` files when rendering templates.

Templates do not use any special syntax, they are regular PHP files.

```php
<h1>
    Hello, <?= $this->e($name) ?>!
</h1>
```

This will produce the following HTML:

```html
<h1>
    Hello, Ryan!
</h1>
```

Passing a data variable to `$this->e()` will escape the value using `htmlspecialchars()` and a fixed set of flags.