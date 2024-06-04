<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\balita;
use Illuminate\View\View;

class FormEditBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        return view('balita.edit',[
            'balita' => balita::find($id)
        ]);
    }
}
