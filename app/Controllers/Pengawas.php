<?php

namespace App\Controllers;

use App\Models\LinkModel;
use App\Models\PengawasModel;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Pengawas extends BaseController
{

    public function index()
    {
        if (!$this->isLoginTrue()) {
            return redirect()->to('/');
        }

        $db = \config\Database::connect();

        $data['link'] = $this->link_model->getAllLink();
        $data['data_pengawas'] = $this->pengawas_model->findAll();

        // Builder data guru
        $builder = $db->query('SELECT * FROM data_guru');
        $data['guru'] = $builder->getResult('array');

        $data['nama'] = session()->get('nama');

        return view('pages/pengawas', $data);
    }

    public function ruangan_pengawas()
    {
        $data['kode_pengawas'] = session()->get('kode_pengawas');
        $ruangan_1 = session()->get('ruangan_kesatu');
        $ruangan_2 = session()->get('ruangan_kedua');
        $data['nama'] = session()->get('nama');
        $data['ruangan_1'] = session()->get('ruangan_kesatu');
        $data['ruangan_2'] = session()->get('ruangan_kedua');
        $data['tanggal_kesatu'] = session()->get('tanggal_kesatu');
        $data['tanggal_kedua'] = session()->get('tanggal_kedua');


        $data['tanggal'] = date("Y-m-d");
        $data['peserta_hari_pertama'] = $this->pengawas_model->where(['ruangan_hari_pertama' => $ruangan_1])->get()->getRowArray();
        $data['peserta_hari_kedua'] = $this->pengawas_model->where(['ruangan_hari_kedua' => $ruangan_2])->get()->getRowArray();

        $data['peserta_pertama'] = $this->peserta_model->where(['ruangan' => $ruangan_1])->get()->getResultArray();
        $data['peserta_kedua'] = $this->peserta_model->where(['ruangan' => $ruangan_2])->get()->getResultArray();


        return view('pages/ruangan_pengawas', $data);
    }

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
                    'ruangan_hari_pertama' => $this->request->getPost('hari_pertama'),
                    'tanggal_hari_pertama' => $this->request->getPost('tanggal_hari_pertama'),
                    'ruangan_hari_kedua' => $this->request->getPost('hari_kedua'),
                    'tanggal_hari_kedua' => $this->request->getPost('tanggal_hari_kedua')
                ];
                // var_dump($data);
                $insert = $this->pengawas_model->insert($data);
                if ($insert) {
                    alert_swal('success', 'Suksess', 'Data pengawas berhasil ditambahkan');
                    return redirect()->to('/pengawas');
                } else {
                    alert_swal('error', 'Gagal', 'Data pengawas tidak berhasil ditambahkan');
                    return redirect()->to('/pengawas');
                }
            }
        }

        // Eror jika data tidak valid, menampilkan pesan error
        $error = $validation->getError('nama');
        alert_swal('error', 'Error', 'Message : ' . $error);

        // Kembalikan ke halaman pengawas
        return redirect()->to('/pengawas');
    }

    public function delete_data($id)
    {
        $delete = $this->pengawas_model->delete($id);
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

    // public function get_session()
    // {
    //     if (condition) {
    //         # code...
    //     }
    // }
}


/* End of file Pengawas.php */
/* Location: ./app/controllers/Pengawas.php */