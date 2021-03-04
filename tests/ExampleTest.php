<?php

namespace G2\FinancialAdapter\Tests;

use Orchestra\Testbench\TestCase;
use G2\FinancialAdapter\FinancialAdapterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FinancialAdapterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
