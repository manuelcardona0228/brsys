<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Profile;
use Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::orderBy('id')->paginate(10);
        return view('images.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::all()->pluck('name', 'id');
        return view('images.create', compact('profile'));
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

        $image = new Image();
        $profile = $request->input('profile_id');
        $image->fill($input);
        $image->profile_id = $profile;

        $image->save();

        Session::flash('estado', 'El perfil ha sido añadido correctamente');
        return redirect('/images');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $profile = Profile::all()->pluck('name', 'id');
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $input = $request->all();
        $image->fill($input)->save();
        Session::flash('estado', 'la imagen se ha creado correctamente');
        return redirect('/images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        Session::flash('estado', 'La imagen se ha eliminado correctamente');
        return redirect('/images');
    }
}
