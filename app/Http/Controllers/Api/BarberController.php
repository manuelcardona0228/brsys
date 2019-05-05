<?php

namespace App\Http\Controllers\Api;

use App\Barber;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberController extends BaseAPIController
{
    
    public function index()
    {
        $type_user_id = 3;
        $barbers = User::where('type_user_id', $type_user_id)->orderBy('id','asc')->get();

        return $this->sendResponse(
            $barbers, 
            'Barber retrieved successfully.');
        
    }

    public function store (Request $request)
    {
        $input = $request->all();

        $barber = User::create($input);

        return $this->sendResponse(
            $barber,
            'Barber created successfully.');
        
    }

    public function show(User $barber)
    {
        return $this->sendResponse(
            $barber,
            'barber retrieveved succesully'
        );
    }

    public function update(request $request, User $barber)
    {
        $input = $request->all();

        $barber -> fill($input);
        $barber ->save();

        return $this->sendResponse(
            $barber, 'Barber updated successfully'
        );
    }

    public function destroy(User $barber)
    {
        $barber->delete();

        return $this->sendResponse(
            $barber, 
            'Barber deleted successfully'
        );
    }

}
