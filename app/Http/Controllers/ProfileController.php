<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Session;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('id')->paginate(10);
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barber = User::where('type_user_id', 3)->pluck('name', 'id');
        return view('profiles.create', compact('barber'));
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
        $profile = new Profile();
        //$request->file('imageProfile')->store('public');
        $barber = $request->input('barber_id');
        $profile->fill($input);
        $profile->barber_id = $barber;
        
        if($request->file('imageProfile'))
        {
            $path = Storage::disk('public')->put('image', $request->file('imageProfile'));
            $profile->fill(['imageProfile' => asset($path)])->save();
        }
        
        //$profile->save();

        
        Session::flash('estado','el perfil ha sido añadido con éxito');
        return redirect('/profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $barber = Barber::all()->pluck('name', 'id');
        return view('profiles.edit', compact('profile', 'barber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $input = $request->all();
        $profile->fill($input)->save();
        Session::flash('estado', 'El perfil se ha editado correctamente');
        return redirect('/profiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        Session::flash('estado', 'El perfil se ha eliminado correctamente');
        redirec('/profiles');
    }
}
