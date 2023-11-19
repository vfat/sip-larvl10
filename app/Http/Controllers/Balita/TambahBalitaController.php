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

        Balita::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nik' => $request->nik,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'alamat' => $request->alamat,
            'anak_ke' => $request->anak_ke,
            'kelamin' => $request->kelamin,
            'golongan_darah' => $request->golongan_darah,
            'berat_lahir' => $request->berat_lahir,
            'tinggi_lahir' => $request->tinggi_lahir,
        ]);

        return redirect()->back();

    }
}
