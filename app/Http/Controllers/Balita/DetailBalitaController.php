<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balita;
use Illuminate\View\View;

class DetailBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        return view('balita.detail',[
            'balita' => Balita::find($id)
        ]);
    }
}
