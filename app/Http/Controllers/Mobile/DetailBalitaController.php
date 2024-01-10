<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\balita;
use Illuminate\View\View;

class DetailBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id, $token): View
    {
        return view('mobile.balitadetail',[
            'balita' => balita::find($id),
            'token' => $token
        ]);
    }
}
