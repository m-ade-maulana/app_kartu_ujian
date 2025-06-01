<?php

namespace App\Http\Controllers;

use Session;

use App\Imports\DataPesertaUjianImport;
use App\Models\PesertaUjian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    // public function __construct(Request $request)
    // {
    //     $this->middleware(function ($request, $next) {
    //         if (!Auth::check()) {
    //             return redirect('/');
    //         }

    //         // Menambahkan header untuk mencegah cache
    //         // response()->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
    //         // response()->headers->set('Pragma', 'no-cache');
    //         // response()->headers->set('Expires', '0');

    //         return $next($request);
    //     });
    // }
    public function index()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            redirect('/');
        }
        return view('admin.dashboard');
    }

    public function presensi_guru_staff()
    {
        return view('admin.presensi.guru_staff');
    }

    public function presensi_siswa()
    {
        return view('admin.presensi.presensi_siswa');
    }

    public function ujian_sts()
    {
        return view('admin.ujian.sts');
    }

    public function ujian_sas()
    {
        return view('admin.ujian.sas');
    }

    public function ujian_projek()
    {
        return view('admin.ujian.projek');
    }

    public function kartu_ujian()
    {
        return view('admin.ujian.kartu_ujian', ['peserta_ujian' => PesertaUjian::with(['jurusan', 'kelas'])->get()]);
    }

    public function peserta_ujian()
    {
        return view('admin.master.peserta_ujian', ['peserta_ujian' => PesertaUjian::with(['jurusan', 'kelas'])->get()]);
    }

    public function cetak_kartu_legitimasi_projek($id_peserta)
    {
        return view('client.legitimasi.legitimasi_projek', ['peserta_ujian' => PesertaUjian::with(['jurusan', 'kelas'])->findOrFail($id_peserta)]);
    }

    public function import_data_peserta(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        if (!$request->hasFile('file')) {
            return back()->withErrors(['msg' => 'File tidak ditemukan dalam request']);
        }

        $filename = rand() . '_' . $file->getClientOriginalName();
        $destinationPath = storage_path('app/temp');

        // Simpan file
        $uploadedFile = $file->move($destinationPath, $filename);

        // Ambil full path (langsung dari hasil move)
        $fullpath = $uploadedFile->getPathname();

        // Cek apakah file benar-benar ada
        if (!file_exists($fullpath)) {
            dd("File gagal disimpan ke: $fullpath");
        }

        // Lanjut import
        Excel::import(new DataPesertaUjianImport, $fullpath);

        return redirect('/');
    }

    public function add_ruang_peserta(Request $request, $id_peserta): RedirectResponse
    {
        $validate = $request->validate([
            'ruang_ujian' => 'required'
        ]);

        $peserta = PesertaUjian::findOrFail($id_peserta);

        $peserta->update($validate);

        return redirect()->route('peserta_ujian.peserta_ujian');
    }

    public function update_peserta(Request $request, $id_peserta): RedirectResponse
    {
        $validate = $request->validate([
            'status_legitimasi_tulis' => 'nullable',
            'status_legitimasi_projek' => 'nullable'
        ]);

        // Ambil data berdasarkan nis
        $peserta = PesertaUjian::findOrFail($id_peserta);

        // Update data yang dipilih
        $peserta->update($validate);

        return redirect()->route('peserta_ujian.peserta_ujian');
    }

    public function proses_masuk(Request $request)
    {
        // $credential = $request->only('password');

        // if (Auth::guard('web')->attempt($credential)) {
        //     return redirect()->intended('/client/dashboard');
        // }

        // return back();
        $request->validate([
            'username' => 'required',
            'password' => 'required|max:8',
        ]);


        $cek_user = User::where('name', $request->username)->first();

        // dd($cek_user);
        if ($cek_user && Hash::check($request->password, $cek_user->password)) {
            Auth::login($cek_user);
            return redirect("/dashboard");
            // dd($cek_user);
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // Hapus sesi
        session()->regenerateToken(); // Hapus token CSRF
        return redirect('/');
    }
}
