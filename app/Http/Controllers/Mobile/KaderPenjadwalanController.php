<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\jadwal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class KaderPenjadwalanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($token): View
    {
        $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : date("Y-m-d");

        $jadwal = jadwal::paginate(15);

        return view('mobile.kaderpenjadwalan',[
            'pengguna' => User::where('token',$token)->first(),
            'token' => $token,
            'tanggal' => $tanggal,
            'jadwal' => $jadwal
        ]);
    }
}
