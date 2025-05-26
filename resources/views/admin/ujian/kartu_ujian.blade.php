@extends('app')

@section('content')
    <h2>Ujian</h2>
    <div class="card mt-3">
        <div class="card-body">
            <table id="table_peserta" class="display mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Cetak Kartu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta_ujian as $peserta)
                        <tr>
                            <td>{{ $peserta->nama_siswa }}</td>
                            <td>{{ $peserta->kelas->kelas }}
                                @if ($peserta->jurusan->id_jurusan == 1)
                                    AKL
                                @elseif ($peserta->jurusan->id_jurusan == 2)
                                    AN
                                @elseif ($peserta->jurusan->id_jurusan == 3)
                                    BP
                                @elseif ($peserta->jurusan->id_jurusan == 4)
                                    DKV
                                @elseif ($peserta->jurusan->id_jurusan == 5)
                                    MP
                                @elseif ($peserta->jurusan->id_jurusan == 6)
                                    PPLG
                                @elseif ($peserta->jurusan->id_jurusan == 7)
                                    TJKT
                                @elseif ($peserta->jurusan->id_jurusan == 8)
                                    AK
                                @elseif ($peserta->jurusan->id_jurusan == 9)
                                    MPLB
                                @elseif ($peserta->jurusan->id_jurusan == 10)
                                    PSPT
                                @elseif ($peserta->jurusan->id_jurusan == 11)
                                    RPL
                                @elseif ($peserta->jurusan->id_jurusan == 12)
                                    TKJ
                                @endif
                            </td>
                            <td>
                                @if ($peserta->status_legitimasi_projek == 1)
                                    <a href="{{ route('cetak.unduh_kartu_legitimasi_projek', Crypt::encrypt($peserta->id_peserta)) }}"
                                        target="_blank" class="badge text-bg-success">Legitimasi Projek</a>
                                @else
                                    <a class="badge text-bg-muted">Legitimasi Projek</a>
                                @endif

                                @if ($peserta->status_legitimasi_tulis == 1)
                                    <a href="#" class="badge text-bg-success">Legitimasi Tulis</a>
                                @else
                                    <a class="badge text-bg-muted">Legitimasi Tulis</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
