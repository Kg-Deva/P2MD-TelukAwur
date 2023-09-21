<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Kontak;
use App\Models\Profile;
use App\Models\SpotPantai;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Wisata;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile()
    {
        $data = Profile::all();
        return view('admin.profile', compact('data'));
    }
    public function add()
    {
        return view('admin.crud.profile.add-profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_profile(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Profile::create($validateData);
        return redirect('profile')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_profile($id)
    {
        $data = Profile::findorfail($id);
        return view('admin.crud.profile.edit-profile', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_profile(Request $request, $id)
    {
        $data = Profile::find($id);
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
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
        $data = Beranda::all();
        return view('admin.beranda', compact('data'));
    }
    public function add_beranda()
    {
        return view('admin.crud.beranda.add-beranda');
    }

    public function simpan_beranda(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Beranda::create($validateData);
        return redirect('beranda')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_beranda($id)
    {
        $data = Beranda::findorfail($id);
        return view('admin.crud.beranda.edit-beranda', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_beranda(Request $request, $id)
    {
        $data = Beranda::find($id);
        $validateData = $request->validate([
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
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
        $data = SpotPantai::all();
        return view('admin.spot', compact('data'));
    }
    public function add_spot()
    {
        return view('admin.crud.spot.add-spot');
    }

    public function simpan_spot(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'nama_spot' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        SpotPantai::create($validateData);
        return redirect('spot-pantai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_spot($id)
    {
        $data = SpotPantai::findorfail($id);
        return view('admin.crud.spot.edit-spot', compact('data'));
    }

    public function update_spot(Request $request, $id)
    {
        $data = SpotPantai::find($id);
        $validateData = $request->validate([
            'nama_spot' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('spot-pantai')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy_spot($id)
    {
        $data = SpotPantai::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');

        // $file = public_path('/post-gambar/'). $data->gambar;

        // if(file_exists($file)) {
        //     @unlink($file);
        // }
        // $data->delete();
        // return back()->with('info', 'Data Berhasil Dihapus');
    }

    /*
|--------------------------------------------------------------------------
| Kuliner
|--------------------------------------------------------------------------
*/

    public function kuliner()
    {
        $data = Kuliner::all();
        return view('admin.kuliner', compact('data'));
    }

    public function add_kuliner()
    {
        return view('admin.crud.kuliner.add-kuliner');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_kuliner(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'nama_kuliner' => 'required',
            'deskripsi' => 'required',
            'nama_warung' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Kuliner::create($validateData);
        return redirect('kuliner')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_kuliner($id)
    {
        $data = Kuliner::findorfail($id);
        return view('admin.crud.kuliner.edit-kuliner', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_kuliner(Request $request, $id)
    {
        $data = Kuliner::find($id);
        $validateData = $request->validate([
            'nama_kuliner' => 'required',
            'deskripsi' => 'required',
            'nama_warung' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('kuliner')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy_kuliner($id)
    {
        $data = Kuliner::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

    /*
|--------------------------------------------------------------------------
| Kontak
|--------------------------------------------------------------------------
*/

    public function kontak()
    {
        $data = Kontak::all();
        return view('admin.kontak', compact('data'));
    }

    public function add_kontak()
    {
        return view('admin.crud.kontak.add-kontak');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_kontak(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'lokasi' => 'required',
            'email' => 'required|unique:kontak|email:dns',
            'telepon' => 'required|integer',
        ]);

        Kontak::create($validateData);
        return redirect('kontak')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_kontak($id)
    {
        $data = Kontak::findorfail($id);
        return view('admin.crud.kontak.edit-kontak', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_kontak(Request $request, $id)
    {
        $data = Kontak::find($id);
        $validateData = $request->validate([
            'lokasi' => 'required',
            'email' => 'required|unique:kontak|email:dns',
            'telepon' => 'required|integer',
        ]);

        $data->update($validateData);
        return redirect('kontak')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy_kontak($id)
    {
        $data = Kontak::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

    /*
|--------------------------------------------------------------------------
| Penginapan
|--------------------------------------------------------------------------
*/

    public function penginapan()
    {
        $data = Penginapan::all();
        return view('admin.penginapan', compact('data'));
    }

    public function add_penginapan()
    {
        return view('admin.crud.penginapan.add-penginapan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_penginapan(Request $request)
    {
        $validateData = $request->validate([
            'nama_penginapan' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Penginapan::create($validateData);
        return redirect('penginapan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_penginapan($id)
    {
        $data = Penginapan::findorfail($id);
        return view('admin.crud.penginapan.edit-penginapan', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_penginapan(Request $request, $id)
    {
        $data = Penginapan::find($id);
        $validateData = $request->validate([
            'nama_penginapan' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('penginapan')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy_penginapan($id)
    {
        $data = Penginapan::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

    /*
|--------------------------------------------------------------------------
| Paket Wisata
|--------------------------------------------------------------------------
*/

    public function wisata()
    {
        $data = Wisata::all();
        return view('admin.paket-wisata', compact('data'));
    }

    public function add_wisata()
    {
        return view('admin.crud.paketwisata.add-paketwisata');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan_wisata(Request $request)
    {
       
        $validateData = $request->validate([
            'nama_paket' => 'required',
            'tujuan_wisata' => 'required',
            'durasi' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Wisata::create($validateData);
        return redirect('wisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_wisata($id)
    {
        $data = Wisata::findorfail($id);
        return view('admin.crud.paketwisata.edit-paketwisata', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update_wisata(Request $request, $id)
    {
        $data = Wisata::find($id);
        $validateData = $request->validate([
            'nama_paket' => 'required',
            'tujuan_wisata' => 'required',
            'durasi' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        $data->update($validateData);
        return redirect('wisata')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy_wisata($id)
    {
        $data = Wisata::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }
}
