<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barbershop;
use App\Headquarter;
use App\User;
use App\Service;
use App\Event;
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
        $hours = ['6:30 AM' => '6:30 AM', '7:00 AM' => '7:00 AM'];
        return view('vistasCliente.pedirTurno', compact('barbershops', 'barbers', 'services', 'users', 'hours'));
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
        $user = \Auth::user();
        $customerName = $user->name;
        $customer = $user->id;

        $input = $request->all();
        $barber = $request->input('barber_id');
        $day = $request->input('day');
        $hour = $request->input('hour');
        $turns = Turn::where('day', $day)->where('hour', $hour)->where('barber_id', $barber)->first();

        if($turns != null)
        {
            Session::flash('error','el turno no se ha creado, intente con otra hora.');
            return redirect('/inicioUser');
        }else{
            $turn = new Turn();
            //$barber = $request->input('barber_id');
            $service = $request->input('service_id');
            $hour = $request->input('hour');
            $turn->fill($input);
            $turn->day = $day;
            $turn->hour = $hour;
            $turn->barber_id = $barber;
            $turn->service_id = $service;
            $turn->customer_id = $customer;
            $turn->state = true;

            $turn->save();

            $message = "Turno De".' '.$customerName;
            $title = $message;
            $color = '#5180E8';
            $textColor = '#FFFFFF';
            $event = new Event();
            $event->title = $title;
            $event->barber_id = $barber;
            $event->turn_id = $turn->id;
            $event->color = $color;
            $event->textColor = $textColor;

            $event->save();
            Session::flash('estado','el turno ha sido añadido con éxito.');
            return redirect('/inicioUser');
        }
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

    public function historialTurnos()
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
