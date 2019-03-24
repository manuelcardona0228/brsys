<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function ver()
    {
        return view('users.ver');
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

    public function editar()
    {
        return view('users.editar');
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
        return view('vistasCliente.pedirTurno');
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
