# Laravel Code Mask

This is a simple Laravel package that help you to manipulate your data.

## Requirements

- PHP >=8.0
- Laravel >= 9.0

## Installation

```
composer require abdulmajidcse/laravel-code-mask
```

<strong>Optional: The service provider will automatically get registered. Or you may manually add the service provider.</strong>

- For Laravel v10 or lower (In your config/app.php file).

```
'providers' => [
    // ...
    Abdulmajidcse\LaravelCodeMask\LaravelCodeMaskServiceProvider::class,
];
```

- For Laravel v11 or upper (In your bootstrap/providers.php file).

```
<?php

return [
    // ...
    Abdulmajidcse\LaravelCodeMask\LaravelCodeMaskServiceProvider::class,
];

```

<strong>If you want to use CodeMaskFacade class as an alias, add aliases in your config/app.php file.</strong>

```
<?php

// ...
use Illuminate\Support\Facades\Facade;

return [
    // ...
    'aliases' => Facade::defaultAliases()->merge([
        // ...
        'CodeMaskFacade' => Abdulmajidcse\LaravelCodeMask\CodeMaskFacade::class,
    ])->toArray(),
];
```

# Usage

- You'll find all features docs <a href="https://github.com/abdulmajidcse/code-mask" target="_blank">here</a>.
- Follow the below code how you'll use CodeMaskFacade class.

```
<?php
use Abdulmajidcse\LaravelCodeMask\CodeMaskFacade;

$phoneNumber = "1234567890";
$hiddenPhoneNumber = CodeMaskFacade::hiddenString($phoneNumber, 2, 2);

echo $hiddenPhoneNumber; // output: 12******90
?>
```

## Follow the <a href="https://github.com/abdulmajidcse/code-mask" target="_blank">Code Mask</a> documentation to get available methods information.
