<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\balita;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrBayiController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id, $token): View
    {
        $databalita = balita::find($id);
        $qrcode = QrCode::generate(
            $databalita->nik,
        );

        return view('mobile.qrbalita',[
            'balita' => $databalita,
            'token' => $token,
            'qrcode' => $qrcode

        ]);
    }
}
