<?php

namespace App\Http\Controllers\Api;

use App\Headquarter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadquarterController extends BaseAPIController
{
    public function index()
    {
        $headquarters = Headquarter::orderBy('id','asc')->get();

        return $this->sendResponse(
            $headquarters, 'Headquarters retrieved successfully.'
        );

    }

    public function show(HeadQuarter $headquarter)
    {
        return $this->sendResponse(
            $headquarter, 'Headquarter retrieved successfully'
        );
    }

    public function getHeadquarters(Request $request, $id)
    {
        $headquarters = Headquarter::where('barbershop_id', $id)->get();
        return $this->sendResponse(
            $headquarters, 'Headquarter retrieved successfully'
        );
    }
}
