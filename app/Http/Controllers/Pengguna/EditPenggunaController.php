<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;


class EditPenggunaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $user = User::find($request->id);
        if($request->password_baru){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($request->id)],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]); 
            $user->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password_baru,
                'role'=> $request->role,
                'lokasi' => $request->lokasi,
            ]);

        }
        else{
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($request->id)],
            ]); 

            $user->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'role'=> $request->role,
                'lokasi' => $request->lokasi,
            ]);
        }

        return redirect()->back();


    }
}
