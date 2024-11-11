<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $model = new LinkModel();
        $data['link'] = $this->link_model->getAllLink();
        $data['nama'] = session()->get('nama');
        return view('pages/home', $data);
    }

    public function pengawas()
    {
        $data['link'] = $this->link_model->getAllLink();
        $data['nama'] = session()->get('nama');
        return view('pages/home', $data);
    }
}
