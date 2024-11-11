<?php

function alert_swal($tipe, $judul = '', $pesan = '')
{
    $skrip = '<script>showNotif("' . $tipe . '", "' . $judul . '", "' . $pesan . '")</script>';
    return session()->setFlashdata('notif', $skrip);
}
