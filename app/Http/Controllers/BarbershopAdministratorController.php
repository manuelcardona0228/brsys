<?php

namespace App\Http\Controllers;

use App\BarbershopAdministrator;
use App\TypeUser;
use Session;
use Illuminate\Http\Request;

class BarbershopAdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = BarbershopAdministrator::orderBy('id')->paginate(10);
        return view('barbershopAdministrators.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barbershopAdministrators.create');
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
        $admin = new BarbershopAdministrator();
        $admin->fill($input);
        $admin->type_user_id = 2;
        $admin->save();


        Session::flash('estado','El administrador de barberia ha sido creado con éxito!');
        return redirect('/barbershopAdministrators');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BarbershopAdministrator $admin)
    {
        return view('barbershopAdministrators.show', compact('admin'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BarbershopAdministrator $admin)
    {
        $cargo = TypeUsers::all()->pluck('name', 'id');

        return view('barbershopAdministrators.edit', compact('admin','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarbershopAdministrator $admin)
    {
        $input = $request->all();
  
        $admin->fill($input)->save();
  
        Session::flash('estado', 'El administrador fue editado exitosamente!');

        return redirect('/barbershopAdministrators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarbershopAdministrator $admin)
    {
        $admin->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/barbershopAdministrators');
    }
}
