<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>SMK Nusantara 1 Kota Tangerang</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/logo_smk.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />

    <style>
        .square-box {
            position: relative;
            width: 100%;
            padding-top: 100%;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .square-box:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .square-content {
            position: absolute;
            inset: 0;
            padding: 1rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .square-content img {
            max-width: 100%;
            max-height: 60%;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        /* Optional: max width to limit size on large screens */
        .square-wrapper {
            max-width: 350px;
        }
    </style>

</head>

<body>

    {{-- content --}}
    @yield('content')
    {{-- End Content --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
