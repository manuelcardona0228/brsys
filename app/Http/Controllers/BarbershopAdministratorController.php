<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\BarbershopAdministrator;
use App\Barbershop;
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
        $barbershopAdministrators = User::where('type_user_id', $type_user_id)->orderBy('id')->paginate(10);
        return view('barbershopAdministrators.index', compact('barbershopAdministrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barbershops = Barbershop::all()->pluck('businessName', 'id');
        return view('barbershopAdministrators.create', compact('barbershops'));
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
        $barbershopAdministrator = new User();
        $password = $request->input('password');
        $password = Hash::make($password);
        $barbershopAdministrator->fill($input);
        $barbershopAdministrator->password = $password;
        $barbershopAdministrator->type_user_id = 2;
        $barbershopAdministrator->save();


        Session::flash('estado','El administrador de barberia ha sido creado con éxito!');
        return redirect('/barbershopAdministrators');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $barbershopAdministrator)
    {
        return view('barbershopAdministrators.show', compact('barbershopAdministrator'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $barbershopAdministrator)
    {
        $cargo = TypeUser::all()->pluck('name', 'id');

        return view('barbershopAdministrators.edit', compact('barbershopAdministrator','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $barbershopAdministrator)
    {
        $input = $request->all();
  
        $barbershopAdministrator->fill($input)->save();
  
        Session::flash('estado', 'El administrador fue editado exitosamente!');

        return redirect('/barbershopAdministrators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $barbershopAdministrator)
    {
        $barbershopAdministrator->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/barbershopAdministrators');
    }

    public function inicio()
    {
        return view('vistasAdminBarberias.start');
    }
}
