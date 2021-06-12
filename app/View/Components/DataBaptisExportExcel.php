<?php

namespace App\View\Components;

use App\DataBaptis;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class DataBaptisExportExcel implements FromView
{
    public function __construct($nama, $nama_baptis, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $nik, $nama_ayah, $agama_ayah
    , $nama_ibu, $agama_ibu, $alamat_pos, $no_hp, $no_kk, $lingkungan, $nama_lengkap_bapak_baptis, $nama_lengkap_ibu_baptis
    , $bukti_surat_baptis, $bukti_surat_nikah, $bukti_kk, $bukti_fotocopy_akte_lahir, $bukti_surat_nikah_orangtua, $username )
    {
        $this->nama = $nama;
        $this->nama_baptis = $nama_baptis;
        $this->tempat_lahir = $tempat_lahir;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->nik = $nik;
        $this->nama_ayah = $nama_ayah;
        $this->agama_ayah = $agama_ayah;
        $this->nama_ibu = $nama_ibu;
        $this->agama_ibu = $agama_ibu;
        $this->alamat_pos = $alamat_pos;
        $this->no_hp = $no_hp;
        $this->no_kk = $no_kk;
        $this->lingkungan = $lingkungan;
        $this->nama_lengkap_bapak_baptis = $nama_lengkap_bapak_baptis;
        $this->nama_lengkap_ibu_baptis = $nama_lengkap_ibu_baptis;
        $this->bukti_surat_baptis = $bukti_surat_baptis;
        $this->bukti_surat_nikah = $bukti_surat_nikah;
        $this->bukti_kk = $bukti_kk;
        $this->bukti_fotocopy_akte_lahir = $bukti_fotocopy_akte_lahir;
        $this->bukti_surat_nikah_orangtua = $bukti_surat_nikah_orangtua;
        $this->username = $username;
    }

    public function view(): View
    {   
        return view('data_baptis_export_excel', [
            'data_baptis_export_excel' => DataBaptis::where('username','like', '%'.$this->username.'%')->where('nama', 'like', '%'.$this->nama.'%')
            ->where('nama_baptis','like', '%'.$this->nama_baptis.'%')->where('tempat_lahir', 'like', '%'.$this->tempat_lahir.'%')
            ->where('tanggal_lahir','like', '%'.$this->tanggal_lahir.'%')->where('jenis_kelamin', 'like', '%'.$this->jenis_kelamin.'%')
            ->where('nik','like', '%'.$this->nik.'%')->where('nama_ayah', 'like', '%'.$this->nama_ayah.'%')
            ->where('agama_ayah','like', '%'.$this->agama_ayah.'%')->where('nama_ibu', 'like', '%'.$this->nama_ibu.'%')
            ->where('agama_ibu','like', '%'.$this->agama_ibu.'%')->where('alamat_pos', 'like', '%'.$this->alamat_pos.'%')
            ->where('no_hp','like', '%'.$this->no_hp.'%')->where('no_kk', 'like', '%'.$this->no_kk.'%')
            ->where('lingkungan','like', '%'.$this->lingkungan.'%')->where('nama_lengkap_bapak_baptis', 'like', '%'.$this->nama_lengkap_bapak_baptis.'%')
            ->where('nama_lengkap_ibu_baptis','like', '%'.$this->nama_lengkap_ibu_baptis.'%')
            ->where('bukti_surat_baptis', 'like', '%'.$this->bukti_surat_baptis.'%')
            ->where('bukti_surat_nikah','like', '%'.$this->bukti_surat_nikah.'%')->where('bukti_kk', 'like', '%'.$this->bukti_kk.'%')
            ->where('bukti_fotocopy_akte_lahir','like', '%'.$this->bukti_fotocopy_akte_lahir.'%')
            ->where('bukti_surat_nikah_orangtua', 'like', '%'.$this->bukti_surat_nikah_orangtua.'%')->get()
        ]);
    }
}