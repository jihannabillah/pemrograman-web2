<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AksesorisModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function daftarAksesoris(){
        $aksesorissModel = model('AksesorisModel');
        $data['aksesoriss'] = $aksesorissModel->findAll();

        return view('admin/daftar-aksesoris', $data);
    }

    public function createAksesoris(){
        $data = $this->request->getPost();
        $fileCover = $this->request->getFile('gambar');

        if(!$fileCover->hasMoved()){
            $path = $fileCover->store('images');
            $data['gambar'] = $path;
        }

        $aksesorissModel = model('AksesorisModel');

        if($aksesorissModel->insert($data, false)){
            return redirect()->to('admin/daftar-aksesoris')->with('berhasil', 'Data berhasil disimpan');
        }else{
            return redirect()->to('admin/daftar-aksesoris')->with('error', 'Data gagal disimpan');
        }
    }

    // Edit Aksesoris
    public function daftarAksesorisEdit($id) 
    {
    $aksesorrisModel = new AksesorisModel();  
    $aksesoris = $aksesorrisModel->find($id);

    $data['aksesoris'] = $aksesoris;
    return view('admin/daftar-aksesoris-edit', $data); 
    }


    public function transaksi(){
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus() 
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus() 
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }
}
