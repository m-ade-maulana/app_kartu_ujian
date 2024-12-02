<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Ujian</title>
</head>

<body>
    <div class="container-fluid" id="dokumen">
        <div class="content">
            <div style="text-align: center;">
                <img src="<?= $logo ?>" alt="" width="100">
            </div>
            <div style="text-align: center; margin-top:10px; margin-bottom: 10px; font-weight: bold;">
                <span>SMK Nusantara 1 Kota Tangerang</span><br>
                <span>Legitimasi Sumatif Akhir Semester</span><br>
                <span>Tahun Ajaran 2024/2025</span>
            </div>
        </div>

        <div id="content" class="mt-2">
            <table
                id="data-diri"
                class="table table-bordered" style="border-collapse: collapse; width: 100%; margin-bottom: 1rem; color: #212529; background-color: transparent; " border="1">
                <tbody>
                    <?php
                    foreach ($peserta as $p) { ?>
                        <tr>
                            <td rowspan="5" style="width: 100px;">
                                <img
                                    src="<?= $user ?>"
                                    style="margin-top: 20px; margin-left: 10px; margin-right: 10px"
                                    alt=""
                                    width="150"
                                    height="150" />
                            </td>
                            <td style="padding-left: 10px;">Nama</td>
                            <td style="padding-left: 10px;"><?= $p['nama'] ?></td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">Kelas</td>
                            <td style="padding-left: 10px;"><?= $p['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">Jurusan</td>
                            <?php
                            if ($p['kelas'] = "X AKL" || $p['kelas'] = "XI AKL" || $p['kelas'] = "XII AKL") { ?>
                                <td style="padding-left: 10px;">Akuntansi Keuangan Lembaga</td>
                            <?php } else if ($p['kelas'] = "X MP" || $p['kelas'] = "XI MP" || $p['kelas'] = "XII MP") { ?>
                                <td style="padding-left: 10px;">Manajemen Perkantoran</td>
                            <?php } else if ($p['kelas'] = "X AN" || $p['kelas'] = "XI AN" || $p['kelas'] = "XII AN") { ?>
                                <td style="padding-left: 10px;">Animasi</td>
                            <?php } else if ($p['kelas'] = "X TJKT" || $p['kelas'] = "XI TJKT" || $p['kelas'] = "XII TJKT") { ?>
                                <td style="padding-left: 10px;">Teknik Jaringan Komputer dan Telekomunikasi</td>
                            <?php } else if ($p['kelas'] = "X DKV" || $p['kelas'] = "XI DKV" || $p['kelas'] = "XII DKV") { ?>
                                <td style="padding-left: 10px;">Desain Komunikasi Visual</td>
                            <?php } else if ($p['kelas'] = "X BP" || $p['kelas'] = "XI BP" || $p['kelas'] = "XII BP") { ?>
                                <td style="padding-left: 10px;">Broadcasting dan Perfilman</td>
                            <?php } else if ($p['kelas'] = "X PPLG" || $p['kelas'] = "XI PPLG" || $p['kelas'] = "XII PPLG") { ?>
                                <td style="padding-left: 10px;">Pengembangan Perangkat Lunak dan GIM</td>
                            <?php } ?>

                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">NIS</td>
                            <td style="padding-left: 10px;"><?= $p['nis'] ?></td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">Nomor Peserta</td>
                            <td style="padding-left: 10px;"><?= $p['id_peserta'] ?></td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td style="padding-left: 10px; vertical-align: middle;">Mata Pelajaran</td>
                            <td style="padding-left: 10px; vertical-align: middle;" colspan="2">Teori Normatif dan adaptif</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td style="padding-left: 10px; vertical-align: middle;">Tanggal</td>
                            <td style="padding-left: 10px; vertical-align: middle;" colspan="2">11 - 12 Desember 2024</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td style="padding-left: 10px; vertical-align: middle;">Waktu</td>
                            <td style="padding-left: 10px; vertical-align: middle;" colspan="2">07:30 - 12:30 WIB</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td style="padding-left: 10px; vertical-align: middle;">Ruang Ujian</td>
                            <td style="padding-left: 10px; vertical-align: middle;" colspan="2"><?= $p['ruangan'] ?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
            <table
                id="validasi"
                class="table table-bordered"
                style="border-collapse: collapse; width: 100%; margin-bottom: 1rem; color: #212529; background-color: transparent;" border="1">
                <tbody>
                    <tr>
                        <td
                            rowspan="3"
                            class="fw-bold"
                            style="vertical-align: middle; width: 15%; padding-left: 10px;">
                            Tanda Tangan Pengawas
                        </td>
                        <td colspan="5" style="font-weight: bold; text-align: center;" class="text-center fw-bold">Paraf</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td style="vertical-align: middle; padding-left: 10px;">Bahasa Indonesia</td>
                        <td style="vertical-align: middle; padding-left: 10px;">Matematika</td>
                        <td style="vertical-align: middle; padding-left: 10px;">Bahasa Inggris</td>
                        <td style="vertical-align: middle; padding-left: 10px;">PAI</td>
                        <td style="vertical-align: middle; padding-left: 10px;">Seni Budaya</td>
                    </tr>
                    <tr>
                        <td
                            style="
                  overflow: auto;
                  height: 50px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            1.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 50px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            2.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 50px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            3.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 50px;
                  vertical-align: middle;
                  width: 15%;
                ">
                            4.
                        </td>
                        <td
                            style="
                  overflow: auto;
                  height: 50px;
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
                style="border-collapse: collapse; width: 100%; margin-bottom: 1rem; color: #212529; background-color: transparent;" border="1">
                <tbody>
                    <tr>
                        <td style="font-weight: bold; padding-left: 10px;" class="fw-bold">Catatan</td>
                    </tr>
                    <tr>
                        <td>
                            <ol>
                                <li>Peserta ujian harus berpakaian rapi, sopan dan memakai atribut sekolah</li>
                                <li>Peserta ujian sudah berada di ruangan sepuluh menit sebelum ujian dimulai</li>
                                <li>Peserta ujian yang terlambat diperkenankan mengikuti ujian setelah mendapat ijin, tanpa perpanjangan waktu</li>
                                <li>Peserta ujian yang melanggar tata tertib ujian dikenakan sanksi akademik</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="footer" style="display: flex; justify-content: space-between">
            <table
                id="validasi"
                class="table table-bordered"
                style="border-collapse: collapse; width: 100%; margin-bottom: 1rem; color: #212529; background-color: transparent;">
                <tbody>
                    <tr>
                        <td style="vertical-align: middle; padding-left: 10px;">
                            <p>Kepala Sekolah</p>
                            <img src="<?= $barcode_validasi ?>" alt="" width="100">
                            <p>Sugiharti Soumifitri, M.Pd</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>