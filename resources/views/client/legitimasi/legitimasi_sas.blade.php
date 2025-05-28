<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Kartu Ujian Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* width: 21cm; */
            /* height: 29.7cm; */
            margin: 0 auto;
            padding: 2cm;
            box-sizing: border-box;
            background-color: #fdfdfd;
            color: #333;
        }

        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .logo {
            width: 150px;
            margin-right: 20px;
        }

        .logo img {
            width: 100%;
            height: auto;
        }

        .header-text {
            flex: 1;
            text-align: center;
        }

        .header-text h1 {
            font-size: 22pt;
            margin: 0;
        }

        .header-text p {
            font-size: 12pt;
            margin: 4px 0;
        }

        .info-siswa {
            margin-bottom: 20px;
        }

        .info-siswa table {
            width: 100%;
            font-size: 12pt;
        }

        .info-siswa td {
            padding: 5px 0;
        }

        .jadwal {
            margin-bottom: 0px;
        }

        .jadwal h3 {
            text-align: center;
            font-size: 16pt;
            margin-bottom: 10px;
        }

        .jadwal table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11pt;
        }

        .jadwal th,
        .jadwal td {
            border: 1px solid #000;
            padding: 8px;
            vertical-align: top;
            text-align: center;
        }

        .mapel {
            font-weight: bold;
            margin-bottom: 4px;
        }

        .ttd {
            margin-top: 50px;
        }

        .ttd p {
            font-size: 10pt;
            text-align: center;
            margin: 10px 0 0;
        }

        .ttd .garis-ttd {
            margin-top: 30px;
            border-top: 1px solid #000;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .mapel-box {
            margin-bottom: 0px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-text">
            <div style="text-align: center; margin-top:10px; margin-bottom: 10px; font-weight: bold;">
                <h2 style="margin: 0;">SMK Nusantara 1 Kota Tangerang</h2>
                <span>Legitimasi Sumatif Akhir Semester Genap</span><br>
                <span>Tahun Ajaran 2024/2025</span><br>
                <span style="font-weight: normal;">Jalan Cisadane VII - VIII Perumnas 1, RT.003/RW.002, Nusa Jaya, Kec.
                    Karawaci, Kota Tangerang, Banten 15116</span><br>
            </div>
        </div>
    </div>

    <div class="info-siswa">
        <table>
            <tr>
                <td style="width: 20%;"><strong>Nama</strong></td>
                <td>: {{ $peserta_ujian->nama_siswa }}</td>
            </tr>
            <tr>
                <td><strong>Kelas</strong></td>
                <td>: {{ $peserta_ujian->kelas->kelas }} {{ $peserta_ujian->jurusan->nama_jurusan }}</td>
            </tr>
            <tr>
                <td><strong>No. Peserta</strong></td>
                <td>: {{ $peserta_ujian->no_peserta }}</td>
            </tr>
        </table>
    </div>

    <div class="jadwal">
        <table>
            <thead>
                <tr>
                    <th style="width: 20%;">Tanggal</th>
                    <th style="width: 26.6%;">Pengawas 1</th>
                    <th style="width: 26.6%;">Pengawas 2</th>
                    <th style="width: 26.6%;">Pengawas 3</th>
                </tr>
            </thead>
            <tbody>
                <!-- Hari pertama -->
                <tr>
                    <td>
                        <div class="mapel-box">
                            03 Mei 2025
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Pend. Agama dan Budi Pekerti <br>
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Pend. Pancasila & Kwarganegaraan
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Sejarah <br><br>
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">paraf</div>
                        </div>
                    </td>
                </tr>
                <!-- Hari Kedua -->
                <tr>
                    <td>
                        <div class="mapel-box">
                            04 Mei 2025
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Bahasa Indonesia
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Matematika
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Seni Budaya (X)
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">paraf</div>
                        </div>
                    </td>
                </tr>
                <!-- Hari Ketiga -->
                <tr>
                    <td>
                        <div class="mapel-box">
                            05 Mei 2025
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Bahasa Indonesia <br><br>
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Matematika <br><br>
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                    <td>
                        <div class="mapel-box">
                            Projek IPAS (X) dan PKK (XI) <br>
                        </div>
                        <div class="ttd">
                            <div class="garis-ttd">Paraf</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <img style="margin-top: 10px" src="assets/images/barcode-validasi.png" alt="" width="100">
</body>

</html>
