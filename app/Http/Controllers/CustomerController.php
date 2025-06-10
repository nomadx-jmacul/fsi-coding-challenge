<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $itemsPerPage = config('api.user_import.pagination.items_per_page');
        $customers = Customer::latest()->paginate($itemsPerPage);

        return view('customers.index', compact('customers'));
    }

    /**
     * @param Customer $customer
     * @return View
     */
    public function show(Customer $customer): View
    {
        return view('customers.show', compact('customer'));
    }
}

