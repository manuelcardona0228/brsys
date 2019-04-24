<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;
use App\Headquarter;
use App\TypeUser;
use Session;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barbers = Barber::orderBy('id')->paginate(10);
        return view('barbers.index', compact('barbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headquarters = Headquarter::all()->pluck('businessName', 'id');
        return view('barbers.create', compact('headquarters'));
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
        $sede = $request->input('headquarter_id');
        $barber = new Barber();
        $barber->fill($input);
        $barber->headquarter_id = $sede;
        $barber->type_user_id = 2;
        $barber->save();

        Session::flash('estado','el barbero ha sido creado con éxito!');
        return redirect('/barbers');
    }

    public function show(Barber $barber)
    {
        return view('barbers.show', compact('barber'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barber $barber)
    {
        $headquarters = Headquarter::all()->pluck('businessName', 'id');
        return view('barbers.edit', compact('barber','headquarters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barber $barber)
    {
        $input = $request->all();
  
        $barber->fill($input)->save();
  
        Session::flash('estado', 'el barbero fue actualizado correctamente!');
        return redirect('/barbers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        $barber->delete();

        Session::flash('estado', 'el barbero se ha eliminado correctamente');

        return redirect('/barbers');
    }

    public function inicio()
    {
        return view('vistasBarbero.home');
    }

    public function verTurnos()
    {
        return view('vistasBarbero.verTurno');
    }

    public function turnosRealizados()
    {
        return view('vistasBarbero.historialTurno');
    }

    public function agendaTurnos()
    {
        return view('vistasBarbero.agenda');
    }
}
