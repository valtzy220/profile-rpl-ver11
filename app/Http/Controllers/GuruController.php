<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return $this->dataguru();
    }
    private function dataguru()
    { 
        
        $guru = [
            ['nama' => 'Taufik dzikri', 'mata_pelajaran' => 'Produktif'],
            ['nama' => 'Retno novia', 'mata_pelajaran' => 'produktif'],
            ['nama' => 'Yani yulyanti', 'mata_pelajaran' => 'produktif'],
            ['nama' => 'Elis', 'mata_pelajaran' => 'PAI'],
            ['nama' => 'Rizal Suyaman', 'mata_pelajaran' => 'KIK'],
        ];
        return view('data-guru', ['guru' => $guru]);
    }
}
