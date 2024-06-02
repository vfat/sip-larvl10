<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\balita;
use App\Models\kaderinput;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class KaderInputController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id, $token): View
    {
        $databalita = balita::find($id);

        $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : date("Y-m-d");
        $cekinput = kaderinput::where('balita_id',$id)->whereDate('created_at', '=', $tanggal)->first();

        return view('mobile.kaderinput',[
            'balita' => $databalita,
            'token' => $token,
            'kaderinput' => $cekinput,

        ]);

    }
}
