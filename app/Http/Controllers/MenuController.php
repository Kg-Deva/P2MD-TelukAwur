<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Profile;
use App\Models\SpotPantai;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile()
     {
         $data=Profile::all();
         return view ('admin.profile', compact('data'));
 
     }
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

        Profile::create($validateData);
        return redirect('profile')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_profile($id)
    {
        $data = Profile::findorfail($id);
        return view ('admin.crud.edit-profile',compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_profile(Request $request, $id)
    {
        $data = Profile::find($id);
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
        $data = Profile::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }
/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
    public function beranda()
    {
        $data=Beranda::all();
        return view ('admin.beranda', compact('data'));

    }
    public function add_beranda()
   {
       
       return view ('admin.crud.add-beranda');
   }

   public function simpan_beranda(Request $request)
    {   
       // dd($request->all());
   
    $validateData = $request->validate([
        'gambar' => 'image|file|max:1024'
    ]);
    

    if($request->file('gambar')) {
        $validateData['gambar']= $request->file('gambar')->store('post-gambar');
        
    }

        Beranda::create($validateData);
        return redirect('beranda')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_beranda($id)
    {
        $data = Beranda::findorfail($id);
        return view ('admin.crud.edit-beranda',compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_beranda(Request $request, $id)
    {
        $data = Beranda::find($id);
        $validateData = $request->validate([
            'gambar' => 'image|file|max:1024'
        ]);

        if($request->file('gambar')) {
            $validateData['gambar']= $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('beranda')->with('success', 'Data Berhasil Diupdate');
    
    }
    public function destroy_beranda($id)
    {
        $data = Beranda::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

/*
|--------------------------------------------------------------------------
| Spot Pantai
|--------------------------------------------------------------------------
*/


public function spot()
{
    $data=SpotPantai::all();
    return view ('admin.spot', compact('data'));

}
public function add_spot()
{
   
   return view ('admin.crud.spot.add-spot');
}

public function simpan_spot(Request $request)
{   
   // dd($request->all());

$validateData = $request->validate([
    'nama_spot' => 'required',
    'gambar' => 'image|file|max:1024'
]);


if($request->file('gambar')) {
    $validateData['gambar']= $request->file('gambar')->store('post-gambar');
    
}

    SpotPantai::create($validateData);
    return redirect('spot-pantai')->with('success', 'Data Berhasil Ditambahkan');
}

public function edit_spot($id)
{
    $data = SpotPantai::findorfail($id);
    return view ('admin.crud.spot.edit-spot',compact('data'));
}

public function update_spot(Request $request, $id)
{
    $data = SpotPantai::find($id);
    $validateData = $request->validate([
        'nama_spot' => 'required',
        'gambar' => 'image|file|max:1024'
    ]);

    if($request->file('gambar')) {
        $validateData['gambar']= $request->file('gambar')->store('post-gambar');
    }
    $data->update($validateData);
    return redirect('spot-pantai')->with('success', 'Data Berhasil Diupdate');

}
public function destroy_spot($id)
{
    $data = SpotPantai::findorfail($id);
    $data->delete();
    return back()->with('info', 'Data Berhasil Dihapus');
    // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
}


    }
