<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class TambahBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'lowercase', 'max:255'],
            'tanggal_lahir' => ['required'],
        ]);       

        /*
        "nik", "nama", "jk", "tgl_lahir", "bb_lahir", "tb_lahir", 
            "nama_ortu", "prov", "kab_kota", "kec", "pukesmas", 
            "desa_kel", "posyandu", "rt", "rw", "alamat", 
            "usia_saat_ukur", "tanggal_pengukuran", "berat", "tinggi", 
            "lila", "bb_u", "zs_bb_u", "tb_u", "zs_tb_u", 
            "bb_tb", "zs_bb_tb", "naik_berat_badan", "pmt_diterima_kg", 
            "jml_vit_a", "kpsp", "kia"        
        
        */
        Balita::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'bb_lahir' => $request->bb_lahir,
            'tb_lahir' => $request->tb_lahir,
            'nama_ortu' => $request->nama_ortu,
            'prov' => $request->prov,
            'kab_kota' => $request->kab_kota,
            'kec' => $request->kec,
            'pukesmas' => $request->pukesmas,
            'desa_kel' => $request->desa_kel,
            'posyandu' => $request->posyandu,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'alamat' => $request->alamat,
            'usia_saat_ukur' => $request->usia_saat_ukur,
            'tanggal_pengukuran' => $request->tanggal_pengukuran,
            'berat' => $request->berat,
            'tinggi' => $request->tinggi,
            'lila' => $request->lila,
            'bb_u' => $request->bb_u,
            'zs_bb_u' => $request->zs_bb_u,
            'tb_u' => $request->tb_u,
            'zs_tb_u' => $request->zs_tb_u,
            'bb_tb' => $request->bb_tb,
            'zs_bb_tb' => $request->zs_bb_tb,
            'naik_berat_badan' => $request->naik_berat_badan,
            'pmt_diterima_kg' => $request->pmt_diterima_kg,
            'jml_vit_a' => $request->jml_vit_a,
            'kpsp' => $request->kpsp,
            'kia' => $request->kia,
        ]);

        return redirect()->back();

    }
}
