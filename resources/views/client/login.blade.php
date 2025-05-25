@extends('client.app');
@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-75">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="/assets/images/logos/logo.png" class="w-50" alt="">
                                </a>
                                <form action="{{ route('proses.masuk') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Masukan Nomor NIS</label>
                                        <input type="num" name="nis" class="form-control" id="nis"
                                            aria-describedby="nis" placeholder="etc:0123456789">
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
