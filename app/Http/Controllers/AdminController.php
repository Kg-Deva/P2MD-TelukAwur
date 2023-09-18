<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Uploadgambar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view ('admin.crud.add-user');
    }

    public function simpan_user(Request $request) {
    //  dd($request->all());
    // $validator=User::create([
    //     'name' => $request->name,
    //     'level' => 'user',
    //     'email' => $request->email,
    //     'password' => bcrypt($request->password),
        
    // ]);

    $validateData = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);
   
        User::create($validateData);
        return redirect('data-user')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    public function show()
    {
       $data=User::all();
    // return $data;
    return view('admin.data-user',compact('data'));

    }

    public function edit($id)
    {
        $data = User::findorfail($id);
        return view ('admin.crud.edit-user',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = User::findorfail($id);
        $data->update($request->all());
        return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $data = User::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }

    public function profile()
    {
        $data=Uploadgambar::all();
        return view ('admin.profile', compact('data'));

    }

    public function administrator()
    {
       $data=User::all();
    // return $data
    return view('admin.administrator',compact('data'));

    }
}
