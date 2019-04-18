<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Department;
use Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('id')->paginate(10);
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all()->pluck('name', 'id');
        return view('cities.create', compact('department'));
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
        $department = $request->input('department_id');
        $city = new City();
        $city ->fill($input);
        $city->department_id = $department;
        $city ->save();        

        Session::flash('estado','La ciudad ha sido añadida con éxito');
        return redirect('/cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('cities.show',compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $department = Department::all()->pluck('name', 'id');
        return view('cities.edit', compact('city', 'department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $input = $request->all();
        $city ->fill($input)->save();
        Session::flash('estado','la ciudad se ha editado correctamente');
        return redirect('/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        Session::flash('estado','la ciudad se ha eliminado correctamente');
        return redirect('/cities');
    }
}
