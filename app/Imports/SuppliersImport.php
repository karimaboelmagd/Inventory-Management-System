<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SuppliersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Supplier([
            'name'          => $row['name'],
            'email'        => $row['email'],
            'address'         => $row['address'],
            'phone'       => $row['phone']
        ]);
    }
}
