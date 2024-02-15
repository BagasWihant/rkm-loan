<?php

namespace App\Models;

use Codeigniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ModelKredit
{
    protected $db;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
    }

    public function getCounterKredit($kode, $kdcab){
        $query = "SELECT * from tabel_counter_kredit where kode='".$kode."' and kdcab='".$kdcab."'";
        $result = $this->db->query($query);
        return $result->getRowArray();
    }

    public function custom($query){
        return $this->db->query($query)->getResultArray();
    }

    public function getSandi($sandi_induk){
        $query = "SELECT * from tabel_sandi WHERE sandi_induk='".$sandi_induk."'";
        return $this->db->query($query)->getResultArray();
    }
}