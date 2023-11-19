<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class ListPenggunaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('pengguna.list',[
            'pengguna' => User::paginate(15)
        ]);
    }
}
