<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
    public function index()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['mapel'] = $this->jadwal_model->findAll();
        $data['nama'] = session()->get('nama');
        return view('pages/jadwal_ujian', $data);
    }

    public function insert_mapel_ujian()
    {
        $this->validation->setRules([
            'nama_mapel' => ['required'],
            'kode_mapel' => ['required'],
            'tanggal' => ['required'],
            'jam_mulai' => ['required'],
            'jam_selesai' => ['required'],
            'kelas' => ['required']
        ]);

        $dataValid = $this->validation->withRequest($this->request)->run();

        if ($dataValid) {
            if ($this->request->getMethod()) {
                # code...
                $data = [
                    'kode_mapel' => $this->request->getPost('kode_mapel'),
                    'nama_mapel' => $this->request->getPost('nama_mapel'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'jam_mulai' => $this->request->getPost('jam_mulai'),
                    'jam_selesai' => $this->request->getPost('jam_selesai'),
                    'kelas' => $this->request->getPost('kelas')
                ];

                $insert = $this->jadwal_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Mata pelajaran berhasil ditambahkan');
                    return redirect()->to('/jadwal_ujian');
                } else {
                    alert_swal('error', 'Suksess', 'Mata Pelajaran tidak berhasil ditambahkan');
                    return redirect()->to('/jadwal_ujian');
                }
            }
        }
        // Eror jika data tidak valid, menampilkan pesan error
        // $error = $validation->getErrors();
        // foreach ($error as $errors) {
        //     echo "<li>$errors</li>";
        // }
        alert_swal('error', 'Error', 'Ada kolom yang belum di isi, silahkan periksa kembali');

        // Kembalikan ke halaman pengawas
        return redirect()->to('/jadwal_ujian');
    }
}
