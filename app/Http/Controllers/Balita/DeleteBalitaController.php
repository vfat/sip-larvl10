<?php

namespace App\Http\Controllers\Balita;

use App\Http\Controllers\Controller;
use App\Models\balita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class DeleteBalitaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        balita::find($id)->delete();

        return redirect()->back();
    }
}
