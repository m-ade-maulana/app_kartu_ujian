<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\PesertaUjian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientController
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('/client/dashboard')->with('success', 'Berhasil Login');
        }
        return view('client.login');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/client/login');
        }

        $peserta = Auth::guard('web')->user();
        // dd($peserta);
        $mapel = Mapel::all();
        // echo $mapel;
        // $data_peserta = PesertaUjian::with(['jurusan', 'kelas'])->findOrFail($peserta->id_peserta);
        return view('client.dashboard', ['jadwal_mapel' => $mapel, 'peserta_ujian' => $peserta]);
    }

    public function unduh_kartu_legitimasi_projek($id_peserta)
    {
        $id = Crypt::decrypt($id_peserta);

        $pathLogo = public_path('assets/images/logos/logo_smk.png');
        $typeLogo = pathinfo($pathLogo, PATHINFO_EXTENSION);
        $dataLogo = file_get_contents($pathLogo);
        $base64Logo = 'data:image/' . $typeLogo . ';base64,' . base64_encode($dataLogo);


        $pathBarcode = public_path('assets/images/barcode-validasi.png');
        $typeBarcode = pathinfo($pathBarcode, PATHINFO_EXTENSION);
        $dataBarcode = file_get_contents($pathBarcode);
        $base64Barcode = 'data:image/' . $typeBarcode . ';base64,' . base64_encode($dataBarcode);

        $kartu = Pdf::loadView('client.legitimasi.legitimasi_projek', [
            'peserta_ujian' => PesertaUjian::with(['jurusan', 'kelas'])->findOrFail($id),
            'logo_smk' => $base64Logo,
            'barcode' => $base64Barcode
        ])->setPaper('A4', 'portrait');

        return $kartu->stream('kartu-legitimasi-projek.pdf');
    }

    public function masuk(Request $request)
    {
        // $credential = $request->only('password');

        // if (Auth::guard('web')->attempt($credential)) {
        //     return redirect()->intended('/client/dashboard');
        // }

        // return back();
        $request->validate([
            'nis' => 'required|numeric'
        ]);

        $cek_peserta = PesertaUjian::where('nis', $request->nis)->first();

        if (!$cek_peserta) {
            return back();
        }

        Auth::login($cek_peserta);

        return redirect()->intended('/client/dashboard');
    }

    public function keluar(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/client/login');
    }
}
