<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Barber;
use App\Headquarter;
use App\TypeUser;
use App\User;
use DB;
use Session;
use Illuminate\Support\Facades\Auth;

class BarAdmBarberController extends Controller
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
        $barbershop = $user->barbershop_id;
        /**
        $headquarters = Headquarter::where('barbershop_id', $barbershop)->orderBy('id')->paginate(10);
        foreach($headquarters as $headquarter)
        {
            $barber = User::where('type_user_id', $type_user_id)->where('headquarter_id', $headquarter->id)->get();
            $barbers[$cont] = $barber;
            $cont++;
        }
         */
        $barbers = DB::table('users')
            ->join('headquarters', 'users.headquarter_id', '=', 'headquarters.id')
            ->select('headquarters.businessName' ,'users.*')
            ->where('headquarters.barbershop_id', $barbershop)
            ->get();
            //dd($barbers);
        //$barbers = User::where('type_user_id', $type_user_id)->where('headquarter_id.barbershop_id', $barbershop)->orderBy('id')->paginate(10);
        return view('vistasAdminBarberia.barbers.index', compact('barbers'));
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
        $headquarters = Headquarter::all()->where('barbershop_id', $barbershop_id)->pluck('businessName', 'id');
        return view('vistasAdminBarberia.barbers.create', compact('headquarters'));
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
        $barber = new User();
        $password = $request->input('password');
        $password = Hash::make($password);
        $sede = $request->input('headquarter_id');
        $barber->fill($input);
        $barber->password = $password;
        $barber->headquarter_id = $sede;
        $barber->type_user_id = 3;
        $barber->save();

        Session::flash('estado','el barbero ha sido creado con éxito!');
        return redirect('/barberAdmins');
    }

    public function show(User $barberAdmin)
    {
        return view('vistasAdminBarberia.barbers.show', compact('barberAdmin'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $barberAdmin)
    {
        $user = \Auth::User();
        $barbershop_id = $user->barbershop_id;
        $headquarters = Headquarter::all()->where('barbershop_id', $barbershop_id)->pluck('businessName', 'id');
        return view('vistasAdminBarberia.barbers.edit', compact('barberAdmin','headquarters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $barberAdmin)
    {
        $input = $request->all();
  
        $barberAdmin->fill($input)->save();
  
        Session::flash('estado', 'el barbero fue actualizado correctamente!');
        return redirect('/barberAdmins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $barberAdmin)
    {
        $barberAdmin->delete();

        Session::flash('estado', 'el barbero se ha eliminado correctamente');

        return redirect('/barberAdmins');
    }
}
