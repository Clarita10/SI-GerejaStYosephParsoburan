<?php

namespace App\View\Components;

use App\DataUmat;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class DataUmatExportExcel implements FromView
{
    public function __construct($username, $nama, $alamat, $nik, $jenis_kelamin, $no_hp, $lingkungan, $no_baptis, $paroki, $keuskupan )
    {
        $this->username = $username;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->nik = $nik;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->no_hp = $no_hp;
        $this->lingkungan = $lingkungan;
        $this->no_baptis = $no_baptis;
        $this->paroki = $paroki;
        $this->keuskupan = $keuskupan;
    }

    public function view(): View
    {   
        return view('data_umat_export_excel', [
            'data_umat_export_excel' => DataUmat::where('username','like', '%'.$this->username.'%')->where('nama', 'like', '%'.$this->nama.'%')
            ->where('alamat','like', '%'.$this->alamat.'%')->where('nik', 'like', '%'.$this->nik.'%')
            ->where('jenis_kelamin','like', '%'.$this->jenis_kelamin.'%')->where('no_hp', 'like', '%'.$this->no_hp.'%')
            ->where('lingkungan','like', '%'.$this->lingkungan.'%')->where('no_baptis', 'like', '%'.$this->no_baptis.'%')
            ->where('paroki','like', '%'.$this->paroki.'%')->where('keuskupan', 'like', '%'.$this->keuskupan.'%')->get()
        ]);        
    }
}