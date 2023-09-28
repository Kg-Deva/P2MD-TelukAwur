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
        return view ('admin.crud.data-user.add-user');
    }

    public function simpan_user(Request $request) {

    $validateData = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'email' => 'required|unique:users|email:dns',
        'password' => 'required|min:8',
    ]);
   
        User::create($validateData);
        return redirect('data-user')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    public function show()
    {
       $data=User::paginate(5);
    // return $data;
    // return view('admin.data-user',compact('data'));
    return view('admin.data-user',['data'=>$data]);


    }

    public function edit($id)
    {
        $data = User::findorfail($id);
        return view ('admin.crud.data-user.edit-user',compact('data'));
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

   

    public function administrator()
    {
    return view('admin.administrator');

    }

    
}
