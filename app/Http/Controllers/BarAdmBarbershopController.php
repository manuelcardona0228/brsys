<?php

namespace App\Http\Controllers;

use App\Barbershop;
use App\BarbershopAdministrator;
use App\Department;
use App\City;
use App\User;
use Illuminate\Http\Request;
use Session;

class BarAdmBarbershopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_user_id = 3;
        $user = \Auth::User();
        $barbershop_id = $user->barbershop_id;
        $barbershops = Barbershop::where('id', $barbershop_id)->orderBy('id')->paginate(10);
        return view('vistasAdminBarberia.barbershops.index', compact('barbershops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        $admin = User::all()->pluck('name', 'id');
        return view('vistasAdminBarberia.barbershops.create', compact('department', 'city', 'admin'));
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
        $department = $request->input('department_id');
        $city = $request->input('city_id');
        //$admin = $request->input('barbershopAdministrator_id');
        $barbershop = new Barbershop();
        $barbershop ->fill($input);

        $barbershop ->department_id = $department;
        $barbershop ->city_id = $city;
        //$barbershop ->barbershopAdministrator_id = $admin;

        $barbershop ->save();

        Session::flash('estado','la barberia ha sido creada con éxito!');
        return redirect('/barbershopAdmins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barbershop $barbershopAdmin)
    {
        return view('vistasAdminBarberia.barbershops.show', compact('barbershopAdmin'));   
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barbershop $barbershopAdmin)
    {
        $department = Department::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        $admin = User::all()->pluck('name', 'id');
        return view('vistasAdminBarberia.barbershops.edit', compact('barbershopAdmin', 'department', 'city', 'admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barbershop $barbershop)
    {
        $input = $request->all();
        $barbershop->fill($input)->save();
        Session::flash('estado','La barberia se ha editado correctamente');
        return redirect('/barbershopAdmins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barbershop $barbershop)
    {
        $barbershop->delete();
        Session::flash('estado','La barberia se ha eliminado correctamente');
        return redirect('/barbershopAdmins');
    }
}
