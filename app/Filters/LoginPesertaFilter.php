<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginPesertaFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = session()->get('nis');
        if (!$auth) {
            return redirect()->to(site_url('/login/peserta'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $auth = session()->get('nis');
        if ($auth) {
            return redirect()->to(site_url('/peserta/kartu-peserta'));
        }
    }
}
