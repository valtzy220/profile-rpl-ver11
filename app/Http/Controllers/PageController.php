<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    public function contact()
    {
        return view('contact');
    }
    public function fasilitas()
    {
        return view('fasilitas');
    } public function guru()
    {
        return view('data-guru');
    }
 
    public function pelajaran()
    {
        return view('mata-pelajaran');
    }
    public function profile()
    {
        return view('profile');
    }
    public function prestasi()
    {
        return view('prestasi');
    }
    public function gallery()
    {
        return view('gallery');
    }
}
