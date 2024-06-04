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

class KaderInputCreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => ['required'],
            'berat' => ['required'],
            'tinggi' => ['required'],
        ]);

        $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : date("Y-m-d");

        $cekinput = kaderinput::where('balita_id',$request->id)->whereDate('created_at', '=', $tanggal)->first();

        $balita = balita::find($request->id);

        $balita->update([
            'berat' => $request->berat,
            'tinggi' => $request->tinggi,
        ]);

        if($cekinput){
            $kaderinput = kaderinput::find($cekinput->id);
            $kaderinput->update([
                'balita_id' => $request->id,
                'berat' => $request->berat,
                'tinggi' => $request->tinggi,
                'vitamin' => $request->vitamin,
                'lila' => $request->lila,
            ]);
        }else{
            $hasil=kaderinput::updateOrCreate([
                'balita_id' => $request->id,
                'berat' => $request->berat,
                'tinggi' => $request->tinggi,
                'vitamin' => $request->vitamin,
                'lila' => $request->lila,
     
            ]);
        }


        // echo json_encode($hasil);
        

        return redirect()->route('mobile.kaderdaftarhadir', $request->token);

    }
}
