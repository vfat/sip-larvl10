<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Balita;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileBalitaCOntroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($token): View
    {
        $user=User::where('token',$token)->first();

        $balita = DB::table('balitas')
            ->leftJoin('user_to_balitas', 'balitas.id', '=', 'user_to_balitas.balita_id')
            ->where('user_to_balitas.user_id', '=', $user->id)
            ->paginate(15);

            return view('mobile.profilebalita',[
                'balita' => $balita,
                'token' => $token
            ]);

    }
}
