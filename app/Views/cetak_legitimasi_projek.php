<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Peserta Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .card {
            width: 500px;
            padding: 20px;
            border: 1px solid #000;
            margin: 50px auto;
            border-radius: 10px;
            text-align: center;
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card-body {
            font-size: 18px;
        }

        .card-footer {
            margin-top: 20px;
            font-size: 14px;
        }

        .photo {
            margin-top: 20px;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            Kartu Peserta Ujian <br> Legitimasi Projek
        </div>
        <div class="card-body">
            <img src="<?= base_url('assets/img/sc.png') ?>" alt="Foto Peserta">
            <div>
                <strong>Nama:</strong> <span id="nama">John Doe</span><br>
                <strong>Nomor Peserta:</strong> <span id="nomor-peserta">123456789</span><br>
                <strong>Ujian:</strong> <span id="ujian">Ujian Akhir Semester</span><br>
                <strong>Tanggal Ujian:</strong> <span id="tanggal-ujian">12 Desember 2024</span><br>
            </div>
            <div class="photo">
                <img src="foto-peserta.jpg" alt="Foto Peserta">
            </div>
        </div>
        <div class="card-footer">
            Harap datang tepat waktu. Semoga sukses!
        </div>
    </div>

</body>

</html>