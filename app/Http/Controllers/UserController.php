<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barbershop;
use App\Headquarter;
use App\User;
use App\Service;
use App\Turn;
use App\Barber;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_user_id = 4;
        $barbershops = Barbershop::all()->pluck('businessName', 'id');
        //$headquarters = Headquarter::all()->pluck('businessName', 'id');
        $barbers = User::where('type_user_id', $type_user_id)->pluck('name', 'id');
        $services = Service::all()->pluck('name', 'id');
        $user = \Auth::user();
        $users = User::where('id', $user->id)->pluck('name', 'id');
        return view('vistasCliente.pedirTurno', compact('barbershops', 'barbers', 'services', 'users'));
    }

    public function getCities(Request $request, $id)
    {
        if($request->ajax())
        {
            $cities = City::cities($id);
            return response()->json($cities);
        }
    }

    public function getHeadquarters(Request $request, $id)
    {
        if($request->ajax())
        {
            $headquarters = Headquarter::headquarters($id);
            return response()->json($headquarters);
        }
    }

    public function getBarbers(Request $request, $id)
    {
        if($request->ajax())
        {
            $barbers = Barber::barbers($id);
            return response()->json($barbers);
        }
    }

    public function getServices(Request $request, $id)
    {
        if($request->ajax())
        {
            $services = Service::services($id);
            return response()->json($services);
        }
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
        return redirect('/vistasCliente.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        redirec('/users');
    }

    public function inicio()
    {
        return view('vistasCliente.home');
    }

    public function pedirTurno()
    {

    }

    public function buscarBarberos()
    {
        return view('vistasCliente.buscarBarbero');
    }

    public function verPerfil()
    {
        return view('vistasCliente.verPerfilBarbero');
    }

    public function buscarServicios()
    {
        return view('vistasCliente.buscarServiciosBarberias');
    }

    public function verServicios()
    {
        return view('vistasCliente.verServiciosBarberias');
    }
}
