<?php

namespace App\Http\Controllers;
use App\SystemAdministrator;
use App\TypeUser;
use Session;
use Illuminate\Http\Request;

class SystemAdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = SystemAdministrator::orderBy('id')->paginate(10);
        return view('systemAdministrators.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('systemAdministrators.create');
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
        $admin = new SystemAdministrator();
        $admin->fill($input);
        $admin->type_user_id = 1;
        $admin->save();


        Session::flash('estado','El administrador de barberia ha sido creado con éxito!');
        return redirect('/systemAdministrators');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SystemAdministrator $admin)
    {
        return view('systemAdministrators.show', compact('admin'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemAdministrator $admin)
    {
        $cargo = TypeUsers::all()->pluck('name', 'id');

        return view('systemAdministrators.edit', compact('admin','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemAdministrator $admin)
    {
        $input = $request->all();
  
        $admin->fill($input)->save();
  
        Session::flash('estado', 'El administrador fue editado exitosamente!');

        return redirect('/systemAdministrators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemAdministrator $admin)
    {
        $admin->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/systemAdministrators');
    }
}
