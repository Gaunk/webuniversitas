<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'STIH Dharma Andigha - Profesional. Integritas. Humanis',
            'stih'  => 'home'

        ];

        return view('temp/u_wrap', $data);
    }
}
