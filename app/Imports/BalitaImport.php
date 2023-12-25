<?php

namespace App\Imports;

use App\Models\balita;
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
        return new balita([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'jk' => $row['jk'],
            'tgl_lahir' => $row['tgl_lahir'],
            'bb_lahir' => trim($row['bb_lahir']) ? $row['bb_lahir'] : 0,
            'tb_lahir' => trim($row['tb_lahir']) ? $row['tb_lahir'] : 0,
            'nama_ortu' => $row['nama_ortu'],
            'prov' => $row['prov'],
            'kab_kota' => $row['kab_kota'],
            'kec' => $row['kec'],
            'pukesmas' => $row['pukesmas'],
            'desa_kel' => $row['desa_kel'],
            'posyandu' => $row['posyandu'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'alamat' => $row['alamat'],
            'usia_saat_ukur' => $row['usia_saat_ukur'],
            'tanggal_pengukuran' => $row['tanggal_pengukuran'],
            'berat' => $row['berat'],
            'tinggi' => $row['tinggi'],
            'lila' => $row['lila'],
            'bb_u' => $row['bb_u'],
            'zs_bb_u' => $row['zs_bb_u'],
            'tb_u' => $row['tb_u'],
            'zs_tb_u' => $row['zs_tb_u'],
            'bb_tb' => $row['bb_tb'],
            'zs_bb_tb' => $row['zs_bb_tb'],
            'naik_berat_badan' => $row['naik_berat_badan'],
            'pmt_diterima_kg' => $row['pmt_diterima_kg'],
            'jml_vit_a' => $row['jml_vit_a'],
            'kpsp' => $row['kpsp'],
            'kia' => $row['kia'],
        ]);
    }
}
