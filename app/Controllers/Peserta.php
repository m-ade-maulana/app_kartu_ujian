<?php

namespace App\Controllers;

class Peserta extends BaseController
{
    // Cek Peserta
    public function index()
    {
        return view('login/peserta');
    }

    public function kartu_peserta()
    {
        $data['id_peserta'] = session()->get('id_peserta');
        $data['nama'] = session()->get('nama');
        $data['nis'] = session()->get('nis');
        $data['kelas'] = session()->get('kelas');
        $data['ruangan'] = session()->get('ruangan');
        $data['foto'] = session()->get('foto');
        $data['legitimasi_projek'] = session()->get('legitimasi_projek');
        $data['legitimasi_teori'] = session()->get('legitimasi_teori');

        $data['jadwal_ujian_kelas_x'] = $this->jadwal_model->getByData('kelas', 'X');
        $data['jadwal_ujian_kelas_xi'] = $this->jadwal_model->getByData('kelas', 'XI');
        $data['jadwal_ujian_kelas_xii'] = $this->jadwal_model->getByData('kelas', 'XII');

        // return view('peserta/kartu_peserta', $data);

        var_dump($data);
    }

    public function cetak_kartu_legitimasi_projek()
    {
        $data['id_peserta'] = session()->get('id_peserta');
        $data['nama'] = session()->get('nama');
        $data['nis'] = session()->get('nis');
        $data['kelas'] = session()->get('kelas');
        $data['ruangan'] = session()->get('ruangan');
        $data['foto'] = session()->get('foto');
        $data['legitimasi_projek'] = session()->get('legitimasi_projek');
        $data['legitimasi_teori'] = session()->get('legitimasi_teori');

        // $data['ttd'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/ttd.png');
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode_validasi'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode-validasi.png');

        $data['style'] = file_get_contents(ROOTPATH . '/public/assets/css/adminlte.css');

        $nama = session()->get('nama');
        $nis = session()->get('nis');

        $file_pdf = "kartu_peserta_" . $nama . $nis;
        $paper = "A4";
        $orientation = "portrait";
        $html = view('peserta/cetak_legitimasi_projek', $data);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper);

        // return view('cetak_legitimasi_projek', $data);
    }

    public function cetak_kartu_legitimasi_teori()
    {
        $data['id_peserta'] = session()->get('id_peserta');
        $data['nama'] = session()->get('nama');
        $data['nis'] = session()->get('nis');
        $data['kelas'] = session()->get('kelas');
        $data['ruangan'] = session()->get('ruangan');
        $data['foto'] = session()->get('foto');
        $data['legitimasi_projek'] = session()->get('legitimasi_projek');
        $data['legitimasi_teori'] = session()->get('legitimasi_teori');

        // $data['ttd'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/ttd.png');
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode_validasi'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode-validasi.png');

        $nama = session()->get('nama');
        $nis = session()->get('nis');

        $file_pdf = "Kartu_Peserta_" . $nama . $nis;
        $paper = "A4";
        $orientation = "Portrait";
        $html = view('peserta/cetak_legitimasi_teori', $data);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    private function imageToBase64($path)
    {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }

    public function delete_data($id)
    {
        $delete = $this->peserta_model->delete($id);
        if ($delete) {
            alert_swal('success', 'Suksess', 'Data berhasil di hapus');
            return redirect()->to('/pengawas');
        } else {
            alert_swal('error', 'Gagal', 'Data tidak berhasil di hapus');
            return redirect()->to('/pengawas');
        }
    }

    public function isLoginTrue(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }
        return false;
    }
}
