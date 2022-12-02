<?php

namespace App\Controllers;
use App\Models\DeviceModel;

class DeviceDetailController extends BaseController
{
    protected $deviceModel;

    public function __construct(){
        $this->deviceModel= new DeviceModel();
    }

    public function index($kunci)
    {
        $data =[
            'title' => 'Detail Barang',
            'barang' => $this->deviceModel->getDevice($kunci)
        ];

        return view('/pages/deviceDetail', $data);
    }
}