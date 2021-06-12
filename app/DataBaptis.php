<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class DataBaptis extends Model
{
    protected $table = "data_baptis";
 
    protected $fillable = ['nama','nama_baptis','tempat_lahir','tanggal_lahir','jenis_kelamin','nik','nama_ayah','agama_ayah'
    ,'nama_ibu','agama_ibu','alamat_pos','no_hp','no_kk','lingkungan','nama_lengkap_bapak_baptis','nama_lengkap_ibu_baptis'
    ,'bukti_surat_baptis','bukti_surat_nikah','bukti_kk','bukti_fotocopy_akte_lahir','bukti_surat_nikah_orangtua','username'];
}