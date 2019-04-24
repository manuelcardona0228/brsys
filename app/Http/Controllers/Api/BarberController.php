<?php

namespace App\Http\Controllers\Api;

use App\Barber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberController extends BaseAPIController
{
    
    public function index()
    {
        $barbers = Barber::orderBy('id','asc')->get();

        return $this->sendResponse(
            $barbers, 
            'Barber retrieved successfully.');
        
    }

    public function store (Request $request)
    {
        $input = $request->all();

        $barber = Barber::create($input);

        return $this->sendResponse(
            $barber,
            'Barber created successfully.');
        
    }

    public function show(Barber $barber)
    {
        return $this->sendResponse(
            $barber,
            'barber retrieveved succesully'
        );
    }

    public function update(request $request, Barber $barber)
    {
        $input = $request->all();

        $barber -> fill($input);
        $barber ->save();

        return $this->sendResponse(
            $barber, 'Barber updated successfully'
        );
    }

    public function destroy(Barber $barber)
    {
        $barber->delete();

        return $this->sendResponse(
            $barber, 
            'Barber deleted successfully'
        );
    }

}
