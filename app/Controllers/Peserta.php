<?php

namespace App\Controllers;

use App\Libraries\Pdfgenerator;
use App\Models\LinkModel;
use App\Models\PesertaModel;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Mpdf\Mpdf;
use Psr\Log\LoggerInterface;

class Peserta extends BaseController
{
    // Constructor
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->model = new LinkModel();
        $this->model2 = new PesertaModel();
    }

    public function kelas_x()
    {
        $data['link'] = $this->model->getAllLink();
        // KELAS X
        $data['peserta_x'] = $this->model2->findAll();
        $data['peserta_x_mp'] = $this->model2->getByData('kelas', 'X MP');
        $data['peserta_x_ak'] = $this->model2->getByData('kelas', 'X AK');
        $data['peserta_x_an'] = $this->model2->getByData('kelas', 'X AN');
        $data['peserta_x_tjkt'] = $this->model2->getByData('kelas', 'X TJKT');
        $data['peserta_x_dkv'] = $this->model2->getByData('kelas', 'X DKV');
        $data['peserta_x_bp'] = $this->model2->getByData('kelas', 'X BP');
        $data['peserta_x_pplg'] = $this->model2->getByData('kelas', 'X PPLG');

        $data['nama'] = session()->get('nama');

        return view('pages/peserta/kelas_x', $data);
    }

    public function kelas_xi()
    {
        $data['link'] = $this->model->getAllLink();
        // KELAS XI
        $data['peserta_xi'] = $this->model2->findAll();
        $data['peserta_xi_mp'] = $this->model2->getByData('kelas', 'XI MP');
        $data['peserta_xi_ak'] = $this->model2->getByData('kelas', 'XI AKL');
        $data['peserta_xi_an'] = $this->model2->getByData('kelas', 'XI AN');
        $data['peserta_xi_tjkt'] = $this->model2->getByData('kelas', 'XI TKJ');
        $data['peserta_xi_dkv'] = $this->model2->getByData('kelas', 'XI DKV');
        $data['peserta_xi_bp'] = $this->model2->getByData('kelas', 'XI PSPT');
        $data['peserta_xi_pplg'] = $this->model2->getByData('kelas', 'XI RPL');

        $data['nama'] = session()->get('nama');

        return view('pages/peserta/kelas_xi', $data);
    }

    public function kelas_xii()
    {
        $data['link'] = $this->model->getAllLink();
        // KELAS XI
        $data['peserta_xii'] = $this->model2->findAll();
        $data['peserta_xii_mp'] = $this->model2->getByData('kelas', 'XII MP');
        $data['peserta_xii_ak'] = $this->model2->getByData('kelas', 'XII AKL');
        $data['peserta_xii_an'] = $this->model2->getByData('kelas', 'XII AN');
        $data['peserta_xii_tjkt'] = $this->model2->getByData('kelas', 'XII TKJ');
        $data['peserta_xii_dkv'] = $this->model2->getByData('kelas', 'XII DKV');
        $data['peserta_xii_bp'] = $this->model2->getByData('kelas', 'XII PSPT');
        $data['peserta_xii_pplg'] = $this->model2->getByData('kelas', 'XII RPL');

        $data['nama'] = session()->get('nama');

        return view('pages/peserta/kelas_xii', $data);
    }

    public function edit_kelas_x($id)
    {
        if ($this->request->getMethod()) {
            if (uri_string() == 'peserta/edit/ruangan/' . $id . '/kelas_x') {
                $data = [
                    'ruangan' => $this->request->getPost('ruangan')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_projek/' . $id . '/kelas_x') {
                $data = [
                    'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_teori/' . $id . '/kelas_x') {
                $data = [
                    'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
                ];
            }

            $update = $this->model2->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_x');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_x');
            }
            // 
        }
    }

    public function edit_kelas_xi($id)
    {
        if ($this->request->getMethod()) {
            if (uri_string() == 'peserta/edit/ruangan/' . $id . '/kelas_xi') {
                $data = [
                    'ruangan' => $this->request->getPost('ruangan')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_projek/' . $id . '/kelas_xi') {
                $data = [
                    'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_teori/' . $id . '/kelas_xi') {
                $data = [
                    'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
                ];
            }

            $update = $this->model2->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_xi');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_xi');
            }
            // 
        }
    }

    public function edit_kelas_xii($id)
    {
        if ($this->request->getMethod()) {
            if (uri_string() == 'peserta/edit/ruangan/' . $id . '/kelas_xii') {
                $data = [
                    'ruangan' => $this->request->getPost('ruangan')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_projek/' . $id . '/kelas_xii') {
                $data = [
                    'legitimasi_projek' => $this->request->getPost('legitimasi_projek')
                ];
            } else if (uri_string() == 'peserta/edit/legitimasi_teori/' . $id . '/kelas_xii') {
                $data = [
                    'legitimasi_teori' => $this->request->getPost('legitimasi_teori')
                ];
            }

            $update = $this->model2->update($id, $data);
            if ($update) {
                alert_swal('success', 'Suksess', 'Data peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_xii');
            } else {
                alert_swal('error', 'Suksess', 'Data tidak peserta berhasil diubah');
                return redirect()->to('/peserta/kelas_xii');
            }
            // 
        }
    }

    public function cek_peserta()
    {
        return view('cek-peserta');
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

        return view('kartu_peserta', $data);
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

        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/' . session()->get('foto'));
        $data['barcode'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode.jpg');

        $data['style'] = file_get_contents(ROOTPATH . '/public/assets/css/adminlte.css');

        $nama = session()->get('nama');
        $nis = session()->get('nis');

        $file_pdf = "kartu_peserta_" . $nama . $nis;
        $paper = "A4";
        $orientation = "portrait";
        $html = view('cetak_legitimasi_projek', $data);

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
        $data['logo'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/logo-smk.png');
        $data['user'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/user.png');
        $data['barcode'] = $this->imageToBase64(ROOTPATH . '/public/assets/img/barcode.jpg');

        $nama = session()->get('nama');
        $nis = session()->get('nis');

        $file_pdf = "Kartu_Peserta_" . $nama . $nis;
        $paper = "A4";
        $orientation = "Portrait";
        $html = view('kartu_peserta', $data);

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
}
