<?php

namespace App\Http\Controllers;

use App\Models\Uploadgambar;
use Illuminate\Http\Request;

class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function add()
    {
        
        return view ('admin.crud.add-profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_profile(Request $request)
    {   
       // dd($request->all());
   
    $validateData = $request->validate([
        'deskripsi' => 'required',
        'gambar' => 'image|file|max:1024'
    ]);
    

    if($request->file('gambar')) {
        $validateData['gambar']= $request->file('gambar')->store('post-gambar');
        
    }

    Uploadgambar::create($validateData);
    return redirect('profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
