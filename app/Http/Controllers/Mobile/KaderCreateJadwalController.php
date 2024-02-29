<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\balita;
use App\Models\User;
use App\Models\jadwal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class KaderCreateJadwalController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tanggal' => ['required'],
        ]);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.fonnte.com/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
        'target' => '0818644684',
        'message' => 'jadwal '.$request->name.' tanggal '.$request->tanggal
        ),
          CURLOPT_HTTPHEADER => array(
            'Authorization: A58EnD#jorB8MFp+BopS'
          ),
        ));
        
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
          $error_msg = curl_error($curl);
        }
        curl_close($curl);
        
        $hasil=jadwal::updateOrCreate([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
 
        ]);
        // echo json_encode($hasil);
        

        return redirect()->back();
    }
}
