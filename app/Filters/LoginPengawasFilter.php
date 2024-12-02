<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginPengawasFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = session()->get('kode_pengawas');
        if (!$auth) {
            return redirect()->to(site_url('/login/pengawas'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $auth = session()->get('kode_pengawas');
        if ($auth) {
            $data = [
                'kode_pengawas' => session()->get('kode_pengawas'),
                'nama' => session()->get('nama'),
            ];
            return view('pengawas/home', $data);
        }
    }
}
