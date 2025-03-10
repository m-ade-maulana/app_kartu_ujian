<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['nama'] = session()->get('nama');

        return view('admin/home', $data);
    }

    public function peserta_kelas_x()
    {
        $data['link'] = $this->link_model->getAllLink();
        // KELAS X
        $data['peserta_x'] = $this->peserta_model->findAll();
        $data['peserta_x_mp'] = $this->peserta_model->getByData('kelas', 'X MP');
        $data['peserta_x_ak'] = $this->peserta_model->getByData('kelas', 'X AK');
        $data['peserta_x_an'] = $this->peserta_model->getByData('kelas', 'X AN');
        $data['peserta_x_tjkt'] = $this->peserta_model->getByData('kelas', 'X TJKT');
        $data['peserta_x_dkv'] = $this->peserta_model->getByData('kelas', 'X DKV');
        $data['peserta_x_bp'] = $this->peserta_model->getByData('kelas', 'X BP');
        $data['peserta_x_pplg'] = $this->peserta_model->getByData('kelas', 'X PPLG');

        $data['nama'] = session()->get('nama');

        return view('admin/kelas_x', $data);
    }

    public function peserta_kelas_xi()
    {
        $data['link'] = $this->link_model->getAllLink();
        // KELAS XI
        $data['peserta_xi'] = $this->peserta_model->findAll();
        $data['peserta_xi_mp'] = $this->peserta_model->getByData('kelas', 'XI MP');
        $data['peserta_xi_ak'] = $this->peserta_model->getByData('kelas', 'XI AKL');
        $data['peserta_xi_an'] = $this->peserta_model->getByData('kelas', 'XI AN');
        $data['peserta_xi_tjkt'] = $this->peserta_model->getByData('kelas', 'XI TKJ');
        $data['peserta_xi_dkv'] = $this->peserta_model->getByData('kelas', 'XI DKV');
        $data['peserta_xi_bp'] = $this->peserta_model->getByData('kelas', 'XI PSPT');
        $data['peserta_xi_pplg'] = $this->peserta_model->getByData('kelas', 'XI RPL');

        $data['nama'] = session()->get('nama');

        return view('admin/kelas_xi', $data);
    }

    public function peserta_kelas_xii()
    {
        $data['link'] = $this->link_model->getAllLink();
        // KELAS XII
        $data['peserta_xii'] = $this->peserta_model->findAll();
        $data['peserta_xii_mp'] = $this->peserta_model->getByData('kelas', 'XII MPLB');
        $data['peserta_xii_ak'] = $this->peserta_model->getByData('kelas', 'XII AKL');
        $data['peserta_xii_an'] = $this->peserta_model->getByData('kelas', 'XII AN');
        $data['peserta_xii_tjkt'] = $this->peserta_model->getByData('kelas', 'XII TKJ');
        $data['peserta_xii_dkv'] = $this->peserta_model->getByData('kelas', 'XII DKV');
        $data['peserta_xii_bp'] = $this->peserta_model->getByData('kelas', 'XII PSPT');
        $data['peserta_xii_pplg'] = $this->peserta_model->getByData('kelas', 'XII RPL');

        $data['nama'] = session()->get('nama');

        return view('admin/kelas_xii', $data);
    }

    public function cetak_legitimasi()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['peserta'] = $this->peserta_model->findAll();
        $data['nama'] = session()->get('nama');
        return view('admin/cetak_legitimasi', $data);
    }

    public function pengawas()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['data_pengawas'] = $this->pengawas_model->findAll();

        // Builder data guru
        $builder = $this->db->query('SELECT * FROM data_guru');
        $data['guru'] = $builder->getResult('array');

        $data['nama'] = session()->get('nama');

        return view('admin/pengawas', $data);
    }

    public function jadwal_ujian()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['mapel'] = $this->jadwal_model->findAll();
        $data['nama'] = session()->get('nama');

        return view('admin/jadwal_ujian', $data);
    }

    // Update Fitur
    public function update_ruang_kelas_x($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'ruangan' => $this->request->getPost('ruangan')
            ];
            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            }
        }
    }

    public function update_ruang_kelas_xi($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'ruangan' => $this->request->getPost('ruangan')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            }
        }
    }

    public function update_ruang_kelas_xii($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'ruangan' => $this->request->getPost('ruangan')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            }
        }
    }

    public function update_legitimasi_projek_kelas_x($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
            ];


            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            }
        }
        // var_dump($data);
    }

    public function update_legitimasi_projek_kelas_xi($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            }
            // var_dump($data);
        }
    }

    public function update_legitimasi_projek_kelas_xii($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            }
        }
    }

    public function update_legitimasi_teori_kelas_x($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-x');
            }
        }
    }

    public function update_legitimasi_teori_kelas_xi($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xi');
            }
        }
    }

    public function update_legitimasi_teori_kelas_xii($id)
    {
        if ($this->request->getMethod()) {
            $data = [
                'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
            ];

            $update = $this->peserta_model->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/admin/data-peserta/kelas-xii');
            }
        }
    }
    // End Update Fitur

    // Insert Fitur
    public function insert_pengawas()
    {
        $validation = \Config\Services::validation();
        $this->validation->setRule('nama', 'Nama', 'required');

        $dataValid = $this->validation->withRequest($this->request)->run();

        if ($dataValid) {
            if ($this->request->getMethod()) {
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'kode_pengawas' => $this->request->getPost('kode_pengawas'),
                    'tanggal_mengawas' => $this->request->getPost('tanggal_mengawas'),
                    'ruangan_pertama' => $this->request->getPost('ruangan_pertama'),
                    'ruangan_kedua' => $this->request->getPost('ruangan_kedua')
                ];
                // var_dump($data);
                $insert = $this->pengawas_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Data pengawas berhasil ditambahkan');
                    return redirect()->to('/admin/data-pengawas');
                } else {
                    alert_swal('error', 'Gagal', 'Data pengawas tidak berhasil ditambahkan');
                    return redirect()->to('/admin/data-pengawas');
                }
            }
        }

        // Eror jika data tidak valid, menampilkan pesan error
        $error = $validation->getError('nama');
        alert_swal('error', 'Error', 'Message : ' . $error);

        // Kembalikan ke halaman pengawas
        return redirect()->to('/admin/data-pengawas');
    }

    public function insert_jadwal_ujian()
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
                    return redirect()->to(site_url('/admin/jadwal-ujian'));
                } else {
                    alert_swal('error', 'Suksess', 'Mata Pelajaran tidak berhasil ditambahkan');
                    return redirect()->to(site_url('/admin/jadwal-ujian'));
                }
            }
        }
        alert_swal('error', 'Error', 'Ada kolom yang belum di isi, silahkan periksa kembali');

        // Kembalikan ke halaman pengawas
        return redirect()->to('/jadwal_ujian');
    }

    public function insert_peserta_x()
    {
        $validation = \Config\Services::validation();
        $this->validation->setRule('nis', 'Nis', 'required');
        $this->validation->setRule('nama', 'Nama', 'required');
        $this->validation->setRule('kelas', 'Kelas', 'required');

        $dataValid = $this->validation->withRequest($this->request)->run();

        if ($dataValid) {
            if ($this->request->getMethod()) {
                $data = [
                    'nis' => $this->request->getPost('nis'),
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'foto' => 'avatar.jpg',
                    'legitimasi_projek' => 'No',
                    'legitimasi_teori' => 'No'
                ];
                // var_dump($data);
                $insert = $this->peserta_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Data peserta berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-x');
                } else {
                    alert_swal('error', 'Gagal', 'Data peserta tidak berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-x');
                }
            }
        }

        // Eror jika data tidak valid, menampilkan pesan error
        alert_swal('error', 'Error', 'Ada kolom yang belum di isi, silahkan periksa kembali');


        // // Kembalikan ke halaman pengawas
        return redirect()->to('/admin/data-peserta/kelas-x');
    }

    public function insert_peserta_xi()
    {
        $validation = \Config\Services::validation();
        $this->validation->setRule('nis', 'Nis', 'required');
        $this->validation->setRule('nama', 'Nama', 'required');
        $this->validation->setRule('kelas', 'Kelas', 'required');

        $dataValid = $this->validation->withRequest($this->request)->run();

        if ($dataValid) {
            if ($this->request->getMethod()) {
                $data = [
                    'nis' => $this->request->getPost('nis'),
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'foto' => 'avatar.jpg',
                    'legitimasi_projek' => 'No',
                    'legitimasi_teori' => 'No'
                ];
                // var_dump($data);
                $insert = $this->peserta_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Data peserta berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-xi');
                } else {
                    alert_swal('error', 'Gagal', 'Data peserta tidak berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-xi');
                }
            }
        }

        // Eror jika data tidak valid, menampilkan pesan error
        alert_swal('error', 'Error', 'Ada kolom yang belum di isi, silahkan periksa kembali');


        // Kembalikan ke halaman pengawas
        return redirect()->to('/admin/data-peserta/kelas-xi');
    }

    public function insert_peserta_xii()
    {
        $validation = \Config\Services::validation();
        $this->validation->setRule('nis', 'Nis', 'required');
        $this->validation->setRule('nama', 'Nama', 'required');
        $this->validation->setRule('kelas', 'Kelas', 'required');

        $dataValid = $this->validation->withRequest($this->request)->run();

        if ($dataValid) {
            if ($this->request->getMethod()) {
                $data = [
                    'nis' => $this->request->getPost('nis'),
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'foto' => 'avatar.jpg',
                    'legitimasi_projek' => 'No',
                    'legitimasi_teori' => 'No'
                ];
                // var_dump($data);
                $insert = $this->peserta_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Data peserta berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-xii');
                } else {
                    alert_swal('error', 'Gagal', 'Data peserta tidak berhasil ditambahkan');
                    return redirect()->to('/admin/data-peserta/kelas-xii');
                }
            }
        }

        // Eror jika data tidak valid, menampilkan pesan error
        alert_swal('error', 'Error', 'Ada kolom yang belum di isi, silahkan periksa kembali');


        // Kembalikan ke halaman pengawas
        return redirect()->to('/admin/data-peserta/kelas-xii');
    }
    // End Insert Fitur

    // Document PDF
    public function cetak_kartu_legitimasi_projek($nis)
    {
        // $data['peserta'] = $this->peserta_model->getByData('nis', $nis);
        $data['peserta'] = $this->peserta_model->where('nis', $nis)->findAll();

        // $data['ttd'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/ttd.png');
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode_validasi'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode-validasi.png');

        $data['style'] = file_get_contents(ROOTPATH . '/public/assets/css/adminlte.css');

        $file_pdf = "kartu_peserta_SMK Nusantara_1_Kota_Tangerang";
        $paper = "A4";
        $orientation = "portrait";
        $html = view('admin/legitimasi/kartu_legitimasi_projek', $data);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper);
    }

    public function cetak_kartu_legitimasi_teori_x($nis)
    {
        $data['peserta'] = $this->peserta_model->where('nis', $nis)->findAll();

        // $data['ttd'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/ttd.png');
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode_validasi'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode-validasi.png');

        $data['style'] = file_get_contents(ROOTPATH . '/public/assets/css/adminlte.css');

        $data['jadwal_ujian_kelas_x'] = $this->jadwal_model->getByData('kelas', 'X Semua Jurusan');
        $data['jadwal_ujian_kelas_xi'] = $this->jadwal_model->getByData('kelas', 'XI Semua Jurusan');
        $data['jadwal_ujian_kelas_xii'] = $this->jadwal_model->getByData('kelas', 'XII Semua Jurusan');

        $file_pdf = "kartu_peserta_SMK Nusantara_1_Kota_Tangerang";
        $paper = "A4";
        $orientation = "portrait";
        $html = view('admin/legitimasi/x/kartu_legitimasi_teori', $data);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper);
    }

    public function cetak_kartu_legitimasi_teori_xi($nis)
    {
        $data['peserta'] = $this->peserta_model->where('nis', $nis)->findAll();

        // $data['ttd'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/ttd.png');
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode_validasi'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode-validasi.png');

        $data['style'] = file_get_contents(ROOTPATH . '/public/assets/css/adminlte.css');

        $data['jadwal_ujian_kelas_x'] = $this->jadwal_model->getByData('kelas', 'X Semua Jurusan');
        $data['jadwal_ujian_kelas_xi'] = $this->jadwal_model->getByData('kelas', 'XI Semua Jurusan');
        $data['jadwal_ujian_kelas_xii'] = $this->jadwal_model->getByData('kelas', 'XII Semua Jurusan');

        $file_pdf = "kartu_peserta_SMK Nusantara_1_Kota_Tangerang";
        $paper = "A4";
        $orientation = "portrait";
        $html = view('admin/legitimasi/xi/kartu_legitimasi_teori', $data);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper);
    }

    private function imageToBase64($path)
    {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
    // End Document PDF

    // Delete Fitur
    public function delete_pengawas($id)
    {
        $delete = $this->pengawas_model->delete($id);
        if ($delete) {
            alert_swal('success', 'Suksess', 'Data berhasil di hapus');
            return redirect()->to('/admin/data-pengawas');
        } else {
            alert_swal('error', 'Gagal', 'Data tidak berhasil di hapus');
            return redirect()->to('/admin/data-pengawas');
        }
    }

    public function delete_peserta($id)
    {
        $delete = $this->peserta_model->delete($id);
        if ($delete) {
            alert_swal('success', 'Suksess', 'Data berhasil di hapus');
            return redirect()->to('/admin/data-pengawas');
        } else {
            alert_swal('error', 'Gagal', 'Data tidak berhasil di hapus');
            return redirect()->to('/admin/data-pengawas');
        }
    }
    // End Delete Fitur
}
