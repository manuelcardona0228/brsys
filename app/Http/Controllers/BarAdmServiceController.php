<?php

namespace App\Http\Controllers;

use App\Service;
use App\Barbershop;
use Illuminate\Http\Request;
use Session;

class BarAdmServiceController extends Controller
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
        $services = Service::where('barbershop_id', $barbershop_id)->orderBy('id')->paginate(10);
        return view('vistasAdminBarberia.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::User();
        $barbershop_id = $user->barbershop_id;
        $barbershop = Barbershop::where('id', $barbershop_id)->pluck('businessName', 'id');
        return view('vistasAdminBarberia.services.create', compact('barbershop'));
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
        return redirect('/serviceAdmins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $serviceAdmin)
    {
        return view('vistasAdminBarberia.services.show', compact('serviceAdmin'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $serviceAdmin)
    {
        $user = \Auth::User();
        $barbershop_id = $user->barbershop_id;
        $barbershop = Barbershop::where('id', $barbershop_id)->pluck('businessName', 'id');
        return view('vistasAdminBarberia.services.edit', compact('serviceAdmin', 'barbershop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $serviceAdmin)
    {
        $input = $request->all();
  
        $serviceAdmin->fill($input)->save();
  
        Session::flash('estado', 'el servicio fue actualizado correctamente!');

        return redirect('/serviceAdmins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $serviceAdmin)
    {
        $serviceAdmin->delete();

        Session::flash('estado', 'El servicio se ha eliminado con exito');

        redirec('/serviceAdmins');
    }
}
