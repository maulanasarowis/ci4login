<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\TransaksiModel;
use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    protected $kamarModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
        $this->transaksiModel = new TransaksiModel();

    }
    
    public function index()
    {
        $data = [
            'title' => 'Daftar Transaksi',
            'transaksi' => $this->transaksiModel->getAll()
        ];
        return view('admin/transaksi/index', $data);
    }

    public function booking($slug)
    {
        $data = [
            'title' => 'Nginap - Booking Kamar',
            'kamar' => $this->kamarModel->getKamar($slug)
        ];

        // jika kamar tidak ada ditabel
        if(empty($data['kamar'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenis kamar ' . $slug . ' tidak ditemukan.');
        }

        // dd($data);
        return view('user/booking', $data);
    }

    // public function create()
    // {
    //     $data = [
    //         'title' => 'Form Tambah Data Kamar',
    //         'validation' => \Config\Services::validation()
    //     ];

    //     return view('admin/kamar/create', $data);
    // }

    public function save() 
    {
        if (!$this->validate([
            'jenis_kamar' => [
                'rules' => 'required|is_unique[kamar.jenis_kamar]',
                'errors' => [
                    'required' => '{field} kamar harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
                ]
        ])) {
            return redirect()->to('user/booking')->withInput();
        }
        
        $this->transaksiModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'kamar_id' => $this->request->getVar('kamar_id'),
            'tgl_masuk' => $this->request->getVar('tgl_masuk'),
            'tgl_keluar' => $this->request->getVar('tgl_keluar'),
            'total_harga' => $this->request->getVar('total_harga'),
        ]);

        session()->setFlashData('pesan', 'Pembayaran Berhasil!');
        return redirect()->to('/success');
    }
}
