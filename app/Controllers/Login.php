<?php

namespace App\Controllers;

use App\Models\PengawasModel;
use App\Models\SessionModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login_page_pengawas()
    {
        return view('login_pengawas');
    }

    public function login_admin()
    {
        // $modal2 = new PesertaModel();
        // $this->model = new SessionModel();

        // var_dump($get_kode_pengawas);
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // $data = $this->model2->login_pengawas($kode_pengawas);
        $data = $this->session_model->where(['username' => $username])->get()->getRowArray();
        // var_dump($data['password']);

        // if ($data['username'] == $username) {
        //     echo $username;
        // }

        if ($data['username'] == $username) {
            if ($data['password'] == $password) {
                if ($data['role'] == "admin") {
                    # code...
                    $data_login = [
                        'nama' => $data['nama'],
                        'role' => $data['role'],
                        'logged_in' => TRUE
                    ];
                    alert_swal('success', 'Berhasil Login', 'Selamat Datang');
                    session()->set($data_login);
                    return redirect()->to('/home');
                } else {
                    alert_swal('error', 'Gagal', 'Periksa Username dan Password Anda');
                    return redirect()->to('/');
                }
            } else {
                alert_swal('error', 'Gagal', 'Periksa Username dan Password Anda');
                return redirect()->to('/');
                // return redirect()->back();
            }
        } else {
            alert_swal('error', 'Gagal', 'Periksa Username dan Password Anda');
            // return redirect()->back();
            return redirect()->to('/');
        }

        // if (!$data) {
        //     session()->setFlashdata('error', 'Kode pengawas salah');
        //     return redirect()->back();
        // } else {
        //     $dataPengawas = [
        //         'nama' => $data['nama'],
        //         'kode_pengawas' => $data['kode_pengawas'],
        //         'logged_in' => TRUE
        //     ];
        //     session()->set($dataPengawas);
        //     return redirect()->to('/pengawas');
        // }
    }

    public function login_pengawas()
    {
        $kode_pengawas = $this->request->getPost('kode_pengawas');

        // $data = $this->model2->login_pengawas($kode_pengawas);
        $data = $this->pengawas_model->where(['kode_pengawas' => $kode_pengawas])->first();
        // echo $kode_pengawas;

        if (!$data) {
            // session()->setFlashdata('error', 'Kode pengawas salah');
            alert_swal('error', 'Gagal', 'Periksa Kode Pengawas Anda');
            return redirect()->back();
        } else {
            $dataPengawas = [
                'nama' => $data['nama'],
                'kode_pengawas' => $data['kode_pengawas'],
                'ruangan_kesatu' => $data['ruangan_hari_pertama'],
                'ruangan_kedua' => $data['ruangan_hari_kedua'],
                'tanggal_kesatu' => $data['tanggal_hari_pertama'],
                'tanggal_kedua' => $data['tanggal_hari_kedua'],
                'logged_in' => TRUE
            ];
            alert_swal('success', 'Sukses', 'Selamat Datang ' . $data['nama']);
            session()->set($dataPengawas);
            return redirect()->to('/home');
        }
    }

    public function cek_peserta()
    {
        $nis = $this->request->getPost('nis');

        // $data = $this->model2->login_pengawas($kode_pengawas);
        $data = $this->peserta_model->where(['nis' => $nis])->first();
        // echo $kode_pengawas;

        if (!$data) {
            // session()->setFlashdata('error', 'Kode pengawas salah');
            alert_swal('error', 'Gagal', 'Periksa NIS anda');
            return redirect()->back();
        } else {
            $data_peserta = [
                'id_peserta' => $data['id_peserta'],
                'nis' => $data['nis'],
                'nama' => $data['nama'],
                'kelas' => $data['kelas'],
                'ruangan' => $data['ruangan'],
                'foto' => $data['foto'],
                'legitimasi_projek' => $data['legitimasi_projek'],
                'legitimasi_teori' => $data['legitimasi_teori']
            ];
            alert_swal('success', 'Sukses', 'Selamat Datang ' . $data['nama']);
            session()->set($data_peserta);
            return redirect()->to('/kartu_peserta');
        }
    }

    public function logout()
    {
        alert_swal('success', 'Sukses', 'Anda telah logout');
        session()->destroy();
        return redirect()->to('/');
    }

    public function logout_peserta()
    {
        alert_swal('success', 'Sukses', 'Anda telah logout');
        session()->destroy();
        return redirect()->to('/cek_peserta');
    }
}
