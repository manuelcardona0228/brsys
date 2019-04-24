<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\BarbershopAdministrator;
use App\TypeUser;
use App\User;
use Session;

class BarbershopAdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_user_id = 2;
        $admins = User::where('type_user_id', $type_user_id)->orderBy('id')->paginate(10);
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
        $admin = new User();
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
    public function show(User $administrator)
    {
        return view('barbershopAdministrators.show', compact('administrator'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        $cargo = TypeUser::all()->pluck('name', 'id');

        return view('barbershopAdministrators.edit', compact('admin','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
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
    public function destroy(User $admin)
    {
        $admin->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/barbershopAdministrators');
    }

    public function inicio()
    {
        return view('vistasAdminBarberias.start');
    }
}
