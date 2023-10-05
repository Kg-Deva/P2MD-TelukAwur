<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Kontak;
use App\Models\Profile;
use App\Models\SpotPantai;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Wisata;
use App\Models\Footer;
use Illuminate\Http\Request;


class ShowController extends Controller
{
    public function profile()
    {
        $data = Profile::all();
        return view('partials.profil', compact('data'));
    }
    /*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
    public function beranda()
    {
        $data = Beranda::all();
        return view('partials.beranda', compact('data'));
    }

    /*
|--------------------------------------------------------------------------
| Spot Pantai
|--------------------------------------------------------------------------
*/

    public function spot()
    {
        $data = SpotPantai::all();
        return view('partials.spot', compact('data'));
    }

    /*
|--------------------------------------------------------------------------
| Kuliner
|--------------------------------------------------------------------------
*/

    public function kuliner()
    {
        $data = Kuliner::all();
        return view('partials.kuliner', compact('data'));
    }

    /*
|--------------------------------------------------------------------------
| Kontak
|--------------------------------------------------------------------------
*/

    public function kontak()
    {
        $data = Kontak::all();
        return view('partials.kontak', compact('data'));
    }

    /*
|--------------------------------------------------------------------------
| Penginapan
|--------------------------------------------------------------------------
*/

    public function penginapan()
    {
        $data = Penginapan::all();
        return view('partials.penginapan', compact('data'));
    }

    /*
|--------------------------------------------------------------------------
| Paket Wisata
|--------------------------------------------------------------------------
*/

    public function wisata()
    {
        $data = Wisata::all();
        return view('partials.wisata', compact('data'));
    }

/* 
|--------------------------------------------------------------------------
|  Footer
|--------------------------------------------------------------------------
*/

    public function footer()
    {
        $data = Footer::all();
        return view('layout.footer', compact('data'));
    }


    
}
