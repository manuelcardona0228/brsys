<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Barber;
use App\Headquarter;
use App\TypeUser;
use App\User;
use App\Turn;
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
        $type_user_id = 3;
        $barbers = User::where('type_user_id', $type_user_id)->orderBy('id')->paginate(10);
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
        $barber = new User();
        $password = $request->input('password');
        $password = Hash::make($password);
        $sede = $request->input('headquarter_id');
        $barber->fill($input);
        $barber->password = $password;
        $barber->headquarter_id = $sede;
        $barber->type_user_id = 3;
        $barber->save();

        Session::flash('estado','el barbero ha sido creado con éxito!');
        return redirect('/barbers');
    }

    public function show(User $barber)
    {
        return view('barbers.show', compact('barber'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $barber)
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
    public function update(Request $request, User $barber)
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
    public function destroy(User $barber)
    {
        $barber->delete();

        Session::flash('estado', 'el barbero se ha eliminado correctamente');

        return redirect('/barbers');
    }

    public function inicio()
    {
        return view('vistasBarbero.home');
    }

    public function turnosPendientes()
    {
        $user = \Auth::User();
        $barber = $user->id;
        $turns = Turn::where('barber_id', $barber)->orderBy('id')->paginate(10); 
        return view('vistasBarbero.turnosPendientes', compact('turns'));
    }

    public function historialTurnos()
    {
        $user = \Auth::User();
        $barber = $user->id;
        $state = 0;
        $turns = Turn::where('barber_id', $barber)->where('state', $state)->orderBy('id')->paginate(10); 
        return view('vistasBarbero.historialTurno', compact('turns'));
    }

    public function agendaTurnos()
    {
        return view('vistasBarbero.agenda');
    }

    public function editInformacion(User $barber)
    {
        $headquarters = Headquarter::all()->pluck('businessName', 'id');
        return view('vistasBarbero.actualizarInformacion', compact('barber','headquarters'));
    }

    public function updateInformacion($request, User $barber)
    {
        $input = $request->all();
  
        $barber->fill($input)->save();
  
        Session::flash('estado', 'el barbero fue actualizado correctamente!');
        return redirect('vistasBarbero.home');
    }
}
