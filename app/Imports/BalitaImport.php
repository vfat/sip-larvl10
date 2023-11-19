<?php

namespace App\Imports;

use App\Models\Balita;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class BalitaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Balita([
            'nama'     => $row['nama' ],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d'),
            'nik' => $row['nik'],
            'ayah' => $row['ayah'],
            'ibu' => $row['ibu'],
            'alamat' => $row['alamat'],
            'anak_ke' => $row['anak_ke'],
            'kelamin' => $row['kelamin'],
            'golongan_darah' => $row['golongan_darah'],
            'berat_lahir' => trim($row['berat_lahir'])?$row['berat_lahir']:0,
            'tinggi_lahir' => trim($row['tinggi_lahir'])?$row['tinggi_lahir']:0,
        ]);
    }
}
