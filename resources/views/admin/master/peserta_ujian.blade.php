@extends('app')

@section('content')
    <h2>Peserta Ujian</h2>

    <form class=" mb-2" method="post" action="{{ route('import_data.import_data_peserta') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label>Pilih file excel</label>
            <div class="col-md-10">
                <input type="file" class="form-control" name="file" required="required">

            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-md">Upload Data</button>
            </div>
        </div>
    </form>

    <button class="btn btn-success">Tambah Data Manual</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="table_peserta" class="display mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta_ujian as $peserta)
                        <tr>
                            <td>{{ $peserta->nama_siswa }}</td>
                            <td>{{ $peserta->kelas->kelas }}</td>
                            <td>
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
                                <a href="#" class="badge text-bg-success" data-bs-toggle="modal"
                                    data-bs-target="#update_data_peserta_{{ $peserta->nis }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($peserta_ujian as $mpu)
        <div class="modal fade" id="update_data_peserta_{{ $mpu->nis }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Update Data ({{ $mpu->nama_siswa }})</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('peserta.update_peserta', ['id_peserta' => $mpu->id_peserta]) }}"
                            method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="legitimasi_projek" class="fw-bold">Legitimasi Projek</label>
                                <select name="status_legitimasi_projek" id="" class="form-control">
                                    @if ($mpu->status_legitimasi_projek == 0)
                                        <option>Silahkan ubah status disini</option>
                                        <option value="1">Lunas</option>
                                    @else
                                        <option value="{{ $mpu->status_legitimasi_projek }}">Sudah Lunas</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="legitimasi_projek" class="fw-bold">Legitimasi SAS</label>
                                <select name="status_legitimasi_tulis" id="" class="form-control">
                                    @if ($mpu->status_legitimasi_tulis == 0)
                                        <option>Silahkan ubah status disini</option>
                                        <option value="1">Lunas</option>
                                    @else
                                        <option value="{{ $mpu->status_legitimasi_tulis }}">Sudah Lunas</option>
                                    @endif

                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-md btn-block btn-success mt-3">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
