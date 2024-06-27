<?php

namespace Abdulmajidcse\LaravelCodeMask\Tests;

use Abdulmajidcse\LaravelCodeMask\LaravelCodeMaskServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LaravelCodeMaskServiceProvider::class,
        ];
    }
}
