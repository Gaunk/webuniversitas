<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Sekolah Tinggi Ilmu Hukum | STIH Dharma Andhiga',
            'stih'  => 'home'

        ];

        return view('temp/u_wrap', $data);
    }
}
