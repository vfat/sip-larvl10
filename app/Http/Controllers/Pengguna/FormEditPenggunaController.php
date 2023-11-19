<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FormEditPenggunaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        return view('pengguna.edit',[
            'pengguna' => User::find($id)
        ]);
    }
}
