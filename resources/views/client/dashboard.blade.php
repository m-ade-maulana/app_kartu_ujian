@extends('client.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <!-- Logo di kiri -->
            <a class="navbar-brand fw-bold" href="#">
                <img src="/assets/images/logos/logo.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
                SMK Nusantara 1 Kota Tangerang
            </a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu di kanan -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center ">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="#">FAQ</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="/logout" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center g-4">
            <div class="col-10 col-sm-6 col-md-5 col-lg-4 square-wrapper">
                <div class="square-box bg-success text-white">
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalJadwal">
                        <div class="square-content">
                            <img class="" src="/assets/images/logos/calendar.png" width="150" alt="Gambar 1">
                            <h5 class="fw-bold text-white">Jadwal Ujian</h5>
                            <p>Klik disini untuk melihat jadwal ujian</p>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-10 col-sm-6 col-md-5 col-lg-4 square-wrapper">
                @if ($peserta_ujian->status_legitimasi_tulis == 1)
                    <div class="square-box bg-success text-white">
                        <a target="_blank"
                            href="{{ route('cetak.unduh_kartu_legitimasi_tulis', Crypt::encrypt($peserta_ujian->id_peserta)) }}"
                            class="nav-link">
                            <div class="square-content">
                                <img class="" src="/assets/images/logos/online-test.png" width="150"
                                    alt="Gambar 2">
                                <h5 class="fw-bold text-white">Kartu Ujian</h5>
                                <p>Klik disini untuk mengunduh kartu ujian</p>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="square-box bg-muted text-white">
                        <a class="nav-link">
                            <div class="square-content">
                                <img class="" src="/assets/images/logos/online-test.png" width="150"
                                    alt="Gambar 2">
                                <h5 class="fw-bold text-white">Kartu Ujian</h5>
                                <p>Klik disini untuk mengunduh kartu ujian</p>
                            </div>
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalJadwal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal_mapel as $jm)
                                <tr>
                                    <td>{{ $jm->tanggal_ujian }}</td>
                                    <td>{{ $jm->waktu_ujian }}</td>
                                    <td>{{ $jm->nama_mapel }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- @if ($jadwal_mapel->tanggal_ujian == 'Selasa, 03 Juni 2025')
                    @endif --}}
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
