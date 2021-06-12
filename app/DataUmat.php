<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class DataUmat extends Model
{
    protected $table = "data_umat";
 
    protected $fillable = ['nama','alamat','nik','jenis_kelamin','no_hp','lingkungan','tanggal_baptis',
    'no_baptis','paroki','keuskupan','username'];
}