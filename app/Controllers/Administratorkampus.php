<?php
namespace App\Controllers;


class Administratorkampus extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'Administrator',
            'adm'  => 'adm_home'

        ];

        return view('temp_admin/adm_wrapp', $data);
    }

 
}
