<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeladminlogin extends Model
{


    public function adm_cek($adm_username, $adm_password)
    {
        return $this->db->table('users')
        ->where(array('adm_username' =>$adm_username, 'adm_password' => $adm_password))
        ->get()->getRowArray();
    }
}