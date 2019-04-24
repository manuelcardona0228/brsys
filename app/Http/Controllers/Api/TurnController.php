<?php

namespace App\Http\Controllers\Api;

use App\Turn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurnController extends BaseAPIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $turns = Turn::orderBy('id', 'asc')->get();

         return $this->sendResponse(
             $turns,
             'Turns retrieved successfully.');
         
     }

    public function store(Request $request)
    {
        $input = $request->all();

        $turn = Turn::create($input);

        return $this->sendResponse(
            $turn,
            'Turn created successfully.');
        
    } 

    public function show(Turn $user)
    {
        return $this->sendResponse(
            $turn,
            'Turn retrieved successfully.');
    }

    public function update(Request $request, Turn $turn)
    {
        $input = $request->all();

        $turn -> fill($input);
        $turn -> save();

        return$this->sendResponse(
            $turn,
            'Turn updated successfully.'
        );
    }

    public function destroy(Turn $turn)
    {
        $turn->delete();

        return $this->sendResponse(
            $turn,
            'Turn deleted successfully.');
        

    }
}
