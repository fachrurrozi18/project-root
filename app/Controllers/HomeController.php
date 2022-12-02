<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Website Pemrograman Web'
        ];
        return view('pages/home', $data);
    }

    public function device()
    {
        $data=[
            'title' => 'device'
        ];
        return view('pages/device', $data);
    }
}
