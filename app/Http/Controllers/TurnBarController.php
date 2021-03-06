<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turn;
use App\Barber;
use App\Service;
use App\Customer;
use App\User;
use Session;

class TurnBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turns = Turn::orderBy('id')->paginate(10);
        return view('vistasBarbero.turns.index', compact('turns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barber = User::where('type_user_id', 3)->pluck('name','id');
        $service = Service::all()->pluck('name', 'id');
        $customer = User::where('type_user_id', 4)->pluck('name', 'id');
        return view('vistasBarbero.turns.create', compact('barber', 'service', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $turn = new Turn();
        $barber = $request->input('barber_id');
        $service = $request->input('service_id');
        $customer = $request->input('customer_id');
        $turn->fill($input);
        $turn->barber_id = $barber;
        $turn->service_id = $service;
        $turn->customer_id = $customer;
        $turn->state = true;

        $turn->save();

        Session::flash('estado','el turno ha sido añadido con éxito');
        return redirect('/turnBarbers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Turn $turnBarber)
    {
        return view('vistasBarbero.turns.show',compact('turnBarber'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Turn $turnBarber)
    {
        $barber = User::where('type_user_id', 3)->pluck('name', 'id');
        $service = Service::all()->pluck('name', 'id');
        $customer = User::where('type_user_id', 4)->pluck('name', 'id');
        return view('vistasBarbero.turns.edit', compact('turnBarber', 'barber', 'service', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turn $turn)
    {
        $input = $request->all();
        $turn->fill($input)->save();
        Session::flash('estado','el turno se ha editado correctamente');
        return redirect('/turnBarbers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turn $turn)
    {
        $turn->delete();
        Session::flash('estado','el turno se ha eliminado correctamente');
        redirec('/turnBarbers');
    }
}
