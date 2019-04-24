<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends BaseAPIController
{
    public function index()
    {
        $customers = Customer::orderBy('name','asc')->get();

        return $this -> sendResponse(
            $customers, 'Customers retrieved successfully.'
        );
    }

    public function store (Request $request)
    {
        $input = $request->all();

        $customer = Customer::create($input);

        return $this->sendResponse(
            $customer, 'user created successfully'
        );
    }

    public function show(Customer $customer)
    {
        return $this->sendResponse(
            $customer, 
            'customer retrieved successfully.');
    }

    public function update(Request $request, Customer $customer)
    {
        $input = $request->all();

        $customer -> fill($input);
        $customer -> save();

        return $this->sendResponse(
            $customer, 
            'Customer updated successfully.');
    }

    public function destroy (Customer $customer)
    {
        $customer->delete();

        return $this->sendResponse(
            $customer, 
            'Customer deleted successfully'
        );
    }
}
