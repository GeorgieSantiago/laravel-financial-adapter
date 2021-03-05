<?

namespace G2\FinancialAdapter\Integrations\Tdameritrade\Tests;

use Orchestra\Testbench\TestCase;
use G2\FinancialAdapter\Integrations\Tdameritrade\TdameritradeServiceProvider;

class LaravelTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            TdameritradeServiceProvider::class,
        ];
    }
}
