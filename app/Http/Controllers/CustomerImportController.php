<?php

namespace App\Http\Controllers;

use App\Services\CustomerImportService;
use Illuminate\Http\JsonResponse;

class CustomerImportController extends Controller
{
    /**
     * @var CustomerImportService
     */
    protected CustomerImportService $customerImportService;

    /**
     * @param CustomerImportService $customerImportService
     */
    public function __construct(CustomerImportService $customerImportService)
    {
        $this->customerImportService = $customerImportService;
    }

    /**
     * Import customers data.
     */
    public function import(): JsonResponse
    {
        try {
            $this->customerImportService->import();
            return response()->json(['message' => 'Customer data import was successful.']);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
