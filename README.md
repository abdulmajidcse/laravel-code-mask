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
return [
    // ...
    Abdulmajidcse\LaravelCodeMask\LaravelCodeMaskServiceProvider::class,
];
```

<strong>Optional: The aliases will automatically get registered. Or you may manually add the aliases in your config/app.php file.</strong>

```
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'CodeMaskFacade' => Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade::class,
])->toArray(),
```

# Usage
You'll see code example so that you can guess where you have to use it.

## Hide String
Sometimes, you need to hide phone, email or any other text with your special letter like 12****90. For this type of tasks, you can follow below code sample.

```
use Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade;

$phoneNumber = "1234567890";
$hidePhoneNumber = CodeMaskFacade::hideString($phoneNumber, 2, 2);

echo $hidePhoneNumber; // output: 12******90
```

## Generate ID
Suppose, you have to generate an ID or any other string based ID with a special format. To do this, you can follow below code sample.

```
use Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade;

$id = CodeMaskFacade::generateId(123, 10, 0, '2701');

echo $id; // output: 27010000000123
```
