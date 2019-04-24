<?php

namespace App\Http\Controllers\Api;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends BaseAPIController
{
    public function index()
    {
        $services = Service::orderBy('id', 'asc')->get();

        return $this -> sendResponse(
            $services,
            'Services retrieved successfully.'
        );
   
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $service = Service::create($input);

        return$this->sendResponse(
            $service,'Service created successfully.'
        );
    }

    public function show(Service $service)
    {
        return $this->sendResponse(
            $service, 
            'Service retrieved successfully.');
    }

    public function update(Request $request, Service $service)
    {
        $input = $request-> all();

        $service -> fill($input);
        $service -> save();

        return $this->sendResponse(
            $service, 'Service updated successfully.');
        
    }

    public function destroy(Service $service)
    {
        $service->delete ();

            return $this ->sendResponse(
                $service, 'Service deleted successfully.');

    }
}
