<?php

namespace App\Imports;

use App\Models\PesertaUjian;
use Maatwebsite\Excel\Concerns\ToModel;

class DataPesertaUjianImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PesertaUjian([
            'id_peserta' => $row[0],
            'no_peserta' => $row[1],
            'nis' => $row[2],
            'nama_siswa' => $row[3],
            'jenis_kelamin' => $row[4],
            'id_kelas' => $row[5],
            'id_jurusan' => $row[6],
            'status_legitimasi_tulis' => $row[7],
            'status_legitimasi_projek' => $row[8]
        ]);
    }
}
