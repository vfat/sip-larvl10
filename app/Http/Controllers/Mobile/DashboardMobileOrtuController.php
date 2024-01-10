<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class DashboardMobileOrtuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($token): View
    {
        return view('mobile.dashboardortu',[
            'pengguna' => User::where('token',$token)->first(),
            'token' => $token
        ]);
    }
}
