<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Headquarter;
use App\Barbershop;
use App\Department;
use App\City;
use Session;


class HeadquarterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headquarters = Headquarter::orderBy('id')->paginate(10);
        return view('headquarters.index', compact('headquarters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barbershop = Barbershop::all()->pluck('businessName', 'id');
        $department = Department::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        return view('headquarters.create', compact('barbershop', 'department', 'city'));
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

        $headquarter = new Image();
        $barbershop = $request->input('barbershop_id');
        $department = $request->input('department_id');
        $city = $request->input('city_id');
        $headquarter->fill($input);
        $headquarter->barbershop_id = $barbershop;
        $headquarter->department_id = $department;
        $headquarter->city_id = $city;
        $headquarter->save();

        Session::flash('estado', 'La sede se ha agregado correctamente');
        return redirect('/headquarters');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Headquarter $headquarter)
    {
        return view('headquarters.show', compact('headquarter'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Headquarter $headquarter)
    {
        $barbershop = Barbershop::all()->pluck('businessName', 'id');
        $department = Department::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        return view('headquarters.edit', compact('barbershop', 'department', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headquarter $headquarter)
    {
        $input = $request->all();
        $headquarter->fill($input)->save();
        Session::flash('estado', 'La sede fue actualizada correctamente');
        return redirect('/headquarters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headquarter $headquarter)
    {
        $headquarter->delete();
        Session::flash('estado', 'La sede fue borrada correctamente');
        redirec('/headquarters');
    }
}
