<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Kartu Ujian</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/logo_smk.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="/assets/images/logos/logo_smk.png" alt="Logo SMK " width="20%">
                                </a>
                                <p class="text-center">Sistem Informasi Kartu Ujian</p>
                                <form action="{{ route('admin.proses_masuk') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputUser" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputUser"
                                            placeholder="ex : Abdul">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword" placeholder="ex : abcd1234">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk
                                        Aja !!!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
