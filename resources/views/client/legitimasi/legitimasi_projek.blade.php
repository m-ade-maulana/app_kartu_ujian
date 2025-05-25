<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kartu Ujian Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* width: 21cm; */
            /* height: 29.7cm; */
            margin: 0 auto;
            padding: 1cm;
            box-sizing: border-box;
            background-color: #fdfdfd;
            color: #333;
            page-break-inside: avoid;
        }

        .header {
            display: flex;
            align-items: center;
            /* Pusatkan vertikal */
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            /* Ini penting agar logo ada di tengah kontainer */
            justify-content: center;
            width: 150px;
            height: 100px;
            /* Tambahkan tinggi tetap */
            margin-right: 100px;
        }

        .logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            align-content: center;
        }

        .header-text {
            flex: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .header-text h2 {
            margin: 0;
            font-size: 22pt;
        }

        .header-text span {
            font-size: 12pt;
            margin: 2px 0;
        }

        .info-siswa {
            margin-bottom: 20px;
            page-break-inside: avoid;
        }

        .info-siswa table {
            width: 100%;
            font-size: 12pt;
        }

        .info-siswa td {
            padding: 5px 0;
        }

        .jadwal {
            margin-bottom: 40px;
            page-break-inside: avoid;
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
            margin-top: 100px;
        }

        .ttd p {
            font-size: 10pt;
            text-align: center;
            margin: 10px 0 0;
        }

        .ttd .garis-ttd {
            margin-top: 60px;
            border-top: 1px solid #000;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .mapel-box {
            margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <div class="header">
        {{-- <div class="logo">
            <img src="{{ $logo_smk }}" alt="Logo Sekolah">
        </div> --}}
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
            <tr>
                <td><strong>Tanggal Sidang</strong></td>
                <td>: 26 - 27 Mei 2025</td>
            </tr>
        </table>
    </div>

    <div class="jadwal">
        <table>
            <thead>
                <tr>
                    <th style="width: 20%;">Nama Penguji</th>
                    <th style="width: 26.6%;">Tanggal</th>
                    <th style="width: 26.6%;">Paraf</th>
                    <th style="width: 26.6%;">Catatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="mapel-box">
                            <div class="ttd"></div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="mapel-box">
                            <div class="ttd"></div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table>
            <tr style="border-style: none;">
                <td style="border-style: none;"><strong>*Catatan</strong></td>
                <td style="border-style: none;">:</td>
                <td style="border-style: none; text-align:left">Kartu ini wajib dibawa dan di tanda tangani oleh penguji
                    pada saat
                    sidang projek</td>
            </tr>
        </table>
    </div>

    <table>
        <tbody>
            <tr>
                <td style="vertical-align: middle; padding-left: 10px;">
                    <p>Kepala Sekolah</p>
                    <img src="{{ $barcode }}" alt="" width="100">
                    <p>Sugiharti Soumifitri, M.Pd</p>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
