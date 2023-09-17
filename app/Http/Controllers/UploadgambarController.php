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
        return redirect('profile')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_profile($id)
    {
        $data = Uploadgambar::findorfail($id);
        return view ('admin.crud.edit-profile',compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_profile(Request $request, $id)
    {
        $data = Uploadgambar::find($id);
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024'
        ]);

        if($request->file('gambar')) {
            $validateData['gambar']= $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('profile')->with('success', 'Data Berhasil Diupdate');
    
    }
    public function destroy($id)
    {
        $data = Uploadgambar::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
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
   
}
