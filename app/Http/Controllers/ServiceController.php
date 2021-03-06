<?php

namespace App\Http\Controllers;

use App\Service;
use App\Barbershop;
use Illuminate\Http\Request;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id')->paginate(10);
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barbershop = Barbershop::all()->pluck('businessName', 'id');
        return view('services.create', compact('barbershop'));
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
        $barbershop = $request->input('barbershop_id');
        $service = new Service();
        $service ->fill($input);
        $service ->save();
        $service ->barbershop_id = $barbershop;
        Session::flash('estado','el servicio ha sido añadido con éxito');
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $barbershop = Barbershop::all()->pluck('businessName', 'id');
        return view('services.edit', compact('service', 'barbershop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $input = $request->all();
  
        $service->fill($input)->save();
  
        Session::flash('estado', 'el servicio fue actualizado correctamente!');

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        Session::flash('estado', 'El servicio se ha eliminado con exito');

        redirec('/services');
    }
}
