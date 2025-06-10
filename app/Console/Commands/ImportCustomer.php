<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use App\Services\CustomerImportService;

class ImportCustomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-customer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Triggers the customer import from random user';

    /**
     * @var CustomerImportService
     */
    protected CustomerImportService $customerImportService;

    /**
     * @param CustomerImportService $customerImportService
     */
    public function __construct(CustomerImportService $customerImportService)
    {
        parent::__construct();

        $this->customerImportService = $customerImportService;
    }

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        try {
            $this->customerImportService->import();
            $this->line('Customer import was successful.');

            return Command::SUCCESS;
        } catch (\Exception $ex) {
            $this->line('Customer import failed.');
            return Command::FAILURE;
        }
    }
}
