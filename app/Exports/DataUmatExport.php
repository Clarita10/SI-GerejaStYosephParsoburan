<?php

namespace App\Exports;

use App\DataUmat;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataUmatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return DataUmat::select('*')->get();
    }
}
