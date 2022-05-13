<?php

namespace App\Imports;

use App\Models\Tienda;
use Maatwebsite\Excel\Concerns\ToModel;

class TiendasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tienda([
            //
            'Sucursal'     => $row[0]
        ]);
    }
}
