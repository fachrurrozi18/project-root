<?php

namespace App\Controllers;
use App\Models\DeviceModel;

class DeviceController extends BaseController
{
    protected $deviceModel;

    public function __construct(){
        $this->deviceModel= new DeviceModel();
    }

    public function index()
    {
        $perangkat= $this->deviceModel->findAll();
        $data=[
            'title' => 'Device',
            'barang'=> $perangkat
        ];

        return view('/pages/device', $data);
    }
}
