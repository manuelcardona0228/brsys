<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\TypeUser;
use App\Department;
use App\City;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id')->paginate(10);
        return view('customers.index', compact('customers'));
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
        return view('customers.create', compact('department', 'city'));
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

        $customer = new Customer();
        $customer->fill($input);
        $customer->type_user_id = 4;
        $customer->save();

        Session::flash('estado','El cliente ha sido creado con éxito!');
        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $typeUser = TypeUser::all()->pluck('name', 'id');
        $city = City::all()->pluck('name', 'id');
        return view('customers.edit', compact('customer', 'typeUser', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $input = $request->all();

        $customer->fill($input)->save();

        Session::flash('estado', 'El cliente fue editado exitosamente!');

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        Session::flash('estado', 'El cliente fue borrado exitosamente!');

        return redirect('/customers');
    }
}