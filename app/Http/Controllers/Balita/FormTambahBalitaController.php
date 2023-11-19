<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balita;
use Illuminate\View\View;

class FormTambahBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('balita.tambah');
    }
}
