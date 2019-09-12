<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Barber;
use App\User;
use App\Department;
use App\City;
use Session;

class BarAdmCustomerController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_user_id = 4;
        $customers = User::where('type_user_id', $type_user_id)->orderBy('id')->paginate(10);
        return view('vistasAdminBarberia.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        return view('vistasAdminBarberia.customers.create', compact('department', 'city'));
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
        $customer = new User();
        $password = $request->input('password');
        $password = Hash::make($password);
        $department = $request->input('department_id');
        $customer->fill($input);
        $customer->password = $password;
        $customer->department_id = $department;
        $customer->type_user_id = 4;
        $customer->save();

        Session::flash('estado','El cliente ha sido creado con éxito!');
        return redirect('/customerAdmins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $customerAdmin)
    {
        return view('vistasAdminBarberia.customers.show', compact('customerAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        $customer->delete();

        Session::flash('estado', 'El cliente fue borrado exitosamente!');

        return redirect('/customerAdmins');
    }
}
