<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model{
    protected $table = 'devices';

    public function getDevice($kunci = false)
    {
        if ($kunci = false) {
            return $this->findAll();
        }
        return $this->where([
            'kunci' => $kunci
        ])->first();        
    }

}
