<?php
namespace App\Controllers;
use App\Models\Modeladminlogin;

class Adminkampus extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->Modeladminlogin = new Modeladminlogin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Administrator'

        ];

        echo view('adm_login', $data);
    }

    public function adm_cek()
    {
        $adm_username = $this->request->getPost('adm_username');
        $adm_password = $this->request->getPost('adm_password');
        $cek = $this->Modeladminlogin->adm_cek($adm_username, $adm_password);
        if (isset($cek->adm_username) && isset($cek->adm_password)) {
            session()->set('adm_username', $cek['adm_username']);
            session()->set('adm_nama', $cek['adm_nama']);
            return redirect()->to(base_url('administratorkampus'));
        }else{
            session()->setFlashdata('pesan', 'username atau password salah!');
            return redirect()->to('adminkampus');
        }
    }
    public function logout(){
		session()->remove('adm_username');
		return redirect()->to('adminkampus');
	}
}
