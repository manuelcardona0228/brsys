<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends BaseAPIController
{
    public function index()
    {
        $type_user_id = 4;
        $customers = User::where('type_user_id', $type_user_id)->orderBy('name','asc')->get();

        return $this -> sendResponse(
            $customers, 'Customers retrieved successfully.'
        );
    }

    public function store (Request $request)
    {
        $input = $request->all();

        $customer = User::create($input);

        return $this->sendResponse(
            $customer, 'user created successfully'
        );
    }

    public function show(User $customer)
    {
        return $this->sendResponse(
            $customer, 
            'customer retrieved successfully.');
    }

    public function update(Request $request, User $customer)
    {
        $input = $request->all();

        $customer -> fill($input);
        $customer -> save();

        return $this->sendResponse(
            $customer, 
            'Customer updated successfully.');
    }

    public function destroy (User $customer)
    {
        $customer->delete();

        return $this->sendResponse(
            $customer, 
            'Customer deleted successfully'
        );
    }
}
