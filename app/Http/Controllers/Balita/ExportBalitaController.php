<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\balita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Exports\BalitaExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tanggal = date('Ymd');
        return Excel::download(new BalitaExport, 'balita-'.$tanggal.'.xlsx');
    }
}
