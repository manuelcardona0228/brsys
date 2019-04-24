<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeUser;
use Session;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = TypeUser::orderBy('id')->paginate(10);

        return view('typeUsers.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeUsers.create');
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
        $cargo = new TypeUser();
        $cargo ->fill($input);
        //$cargo ->user_id = Auth::id();
        $cargo ->save();

        Session::flash('estado','El cargo ha sido creado con éxito!');
        return redirect('/typeUsers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TypeUser $cargo)
    {
        return view('typeUsers.show', compact('cargo'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeUser  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeUser $cargo)
    {
        return view('typeUsers.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeUser $cargo)
    {
        $input = $request->all();
  
        $cargo->fill($input)->save();
  
        Session::flash('estado', 'El cargo fue editado exitosamente!');

        return redirect('/typeUsers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeUser $cargo)
    {
        $cargo->delete();

        Session::flash('estado', 'El cargo fue borrado exitosamente!');

        return redirect('/typeUsers');
    }
}
