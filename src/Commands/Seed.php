<?php

namespace G2\FinancialAdapter\Commands;

use Illuminate\Console\Command;
use G2\FinancialAdapter\Models\Service;

class Seed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'financial:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the services';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $services = config("FinancialAdapter")['services'];
        foreach( $services as $code => $service )
        {
            Service::updateOrCreate([
                'name' => $service['service'],
                'code' => $code
            ]);
        }
    }
}
