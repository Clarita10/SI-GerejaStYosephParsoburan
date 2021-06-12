<?php

namespace App\Imports;

use App\DataUmat;
use Maatwebsite\Excel\Concerns\ToModel;

class DataUmatImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataUmat([
            'username' => $row[1],
            'nama' => $row[2], 
            'alamat' => $row[3], 
            'nik' => $row[4],
            'jenis_kelamin' => $row[5], 
            'no_hp' => $row[6], 
            'lingkungan' => $row[7],
            'tanggal_baptis' => $row[8], 
            'no_baptis' => $row[9], 
            'paroki' => $row[10], 
            'keuskupan' => $row[11], 
        ]);
    }
}
