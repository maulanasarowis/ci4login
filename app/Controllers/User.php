<?php

namespace App\Controllers;

use App\Models\KamarModel;

class User extends BaseController
{
    protected $kamarModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'User',
            'kamar' => $this->kamarModel->getKamar()
        ];
        return view('user/index', $data);
    }

    public function room()
    {
        $data = [
            'title' => 'Daftar Kamar',
            'kamar' => $this->kamarModel->getKamar()
        ];
        // dd($data);
        return view('user/room', $data);
    }
    public function about()
    {
        // $data['title'] = 'User';
        return view('user/about');
    }
    public function facility()
    {
        // $data['title'] = 'User';
        return view('user/facility');
    }
    public function transaksi()
    {
        $data['title'] = 'Pembayaran';
        return view('user/transaksi', $data);
    }
    // public function booking()
    // {
    //     // $data['title'] = 'User';
    //     return view('user/booking');
    // }
}
