# Laravel Code Mask

This is a simple Laravel package that help you to manipulate your data.

## Requirements

- PHP >=7.4 | >=8.0
- Laravel >= 8.0 | >= 9.0 | >= 10.0 | >= 11.0

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

<strong>Optional: The aliases will automatically get registered. Or you may manually add the aliases in your config/app.php file.</strong>

```
<?php

// ...
use Illuminate\Support\Facades\Facade;

return [
    // ...
    'aliases' => Facade::defaultAliases()->merge([
        // ...
        'CodeMaskFacade' => Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade::class,
    ])->toArray(),
];
```

# Usage

- You'll find all features docs <a href="https://packagist.org/packages/abdulmajidcse/code-mask" target="_blank">here</a>.
- Follow the below code how you'll use CodeMaskFacade class.

```
<?php
use Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade;

$phoneNumber = "1234567890";
$hidePhoneNumber = CodeMaskFacade::hideString($phoneNumber, 2, 2);

echo $hidePhoneNumber; // output: 12******90
?>
```

**Follow the <a href="https://packagist.org/packages/abdulmajidcse/code-mask" target="_blank">Code Mask</a> documentation to get available methods/features information.**
