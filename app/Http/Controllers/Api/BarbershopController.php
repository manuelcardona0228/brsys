<?php

namespace App\Http\Controllers\Api;

use App\Barbershop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarbershopController extends BaseAPIController
{
    public function index()
    {
        $barbershops = Barbershop::orderBy('id','asc')->get();

        return $this->sendResponse(
            $barbershops, 'barbershops retieved successfully'
        );
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $barbershop = Barbershop::create($input); 

        return $this->sendResponse(
            $barbershop, ' BarberShop created successfully'
        );

    }

    public function show(Barbershop $barbershop)
    {
        return $this->sendResponse(
            $barbershop, 'Barbershop retrieved successfully.'
        );
    }

    public function update(Request $request, Barbershop $barbershop)
    {
        $input = $request->all();

        $barbershop -> dill($input);
        $barbershop -> save();

        return $this->sendResponse(
            $barbershop, 'Barbershop updated successfully'
        );
    }

    public function destroy(Barbershop $barbershop )
    {
        $barbershop->delete();

        return $this->sendResponse(
            $barbershop, 'Barbershop deleted succesfully.'
        );

    }


}
