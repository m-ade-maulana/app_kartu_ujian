<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bootstrap</title>
    <link rel="stylesheet" href="<?= $style ?>">

</head>

<body>
    <div class="container-fluid" id="dokumen">
        <div id="header" class="mt-2">
            <div class="row">
                <div class="col-sm-2">
                    <img src="<?= $logo ?>" alt="" width="100">
                </div>
                <div class="col-sm-8">
                    <h5 style="font-size: 18px">SMK Nusantara 1 Kota Tangerang</h5>
                    <h5 style="font-size: 18px">
                        Legitimasi Peserta Penilaian Sumatif Akhir Semester
                    </h5>
                    <h5 style="font-size: 18px">Tahun Ajaran 2024/2025</h5>
                </div>
                <div class="col-sm-2">
                    <img src="<?= $barcode ?>" alt="" width="100">
                </div>
            </div>
        </div>

        <div id="content" class="mt-2">
            <table
                id="data-diri"
                class="table table-bordered"
                style="border: 1px solid">
                <tbody>
                    <tr>
                        <td rowspan="5" style="width: 1%">
                            <img
                                src="<?= $user ?>"
                                style="margin-top: 20px"
                                alt=""
                                width="150"
                                height="150" />
                        </td>
                        <td>Nama</td>
                        <td>M Ade Maulana</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>X PPLG</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>Pengembangan Perangkat Lunak dan GIM</td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td>Nomor Peserta</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td colspan="2">Teori Normatif dan adaptif</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td colspan="2">11 - 12 Desember 2024</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td colspan="2">07:30 - 12:30</td>
                    </tr>
                    <tr>
                        <td>Ruang Ujian</td>
                        <td colspan="2">Ruang 1</td>
                    </tr>
                    <tr>
                        <td>Nomor Bangku</td>
                        <td colspan="2">10</td>
                    </tr>
                </tbody>
            </table>
            <table
                id="validasi"
                class="table table-bordered"
                style="border: 1px solid">
                <tbody>
                    <tr>
                        <td
                            rowspan="3"
                            class="fw-bold"
                            style="vertical-align: middle; width: 15%">
                            Tanda Tangan Pengawas
                        </td>
                        <td colspan="5" class="text-center fw-bold">Paraf</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Bahasa Indonesia</td>
                        <td style="vertical-align: middle">Matematika</td>
                        <td style="vertical-align: middle">Bahasa Inggris</td>
                        <td style="vertical-align: middle">PAI</td>
                        <td style="vertical-align: middle">Seni Budaya</td>
                    </tr>
                    <tr style="">
                        <td
                            style="
                  overflow: auto;
                  height: 100px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            1.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 100px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            2.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 100px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            3.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 100px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            4.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 100px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            5.
                        </td>
                    </tr>
                </tbody>
            </table>
            <table
                id="catatan"
                class="table table-bordered"
                style="border: 1px solid">
                <tbody>
                    <tr>
                        <td class="fw-bold">Catatan</td>
                    </tr>
                    <tr>
                        <td>
                            <ol>
                                <li>
                                    Kartu peserta SAS wajib di cetak menggunakan kerta A4 dan
                                    selalu dibawa ketika SAS
                                </li>
                                <li>
                                    Peserta tidak boleh keluar ruangan selama ujian berlangsung
                                </li>
                                <li>Peserta wajib hadir 30 menit sebelum ujian dimulai</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>