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

    public function updateCounterKredit($kode, $kdcab){
        $query = "SELECT counter as n from tabel_counter_kredit where kode='".$kode."' and kdcab='".$kdcab."'";
        $result = $this->db->query($query);
        $res = $result->getRowArray();
        $newcount = $res['n']+1;
        $q = "Update tabel_counter_kredit SET counter = '$newcount' where kode='".$kode."' and kdcab='".$kdcab."'";
        $result = $this->db->query($q);

        return $newcount;
    }

    public function custom($query){
        return $this->db->query($query)->getResultArray();
    }

    public function getSandi($sandi_induk){
        $query = "SELECT * from tabel_sandi WHERE sandi_induk='".$sandi_induk."'";
        return $this->db->query($query)->getResultArray();
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $no_reg ID primary key
     * @return Boolean proses insert
     * @throws conditon
     **/
    public function save($data = []): bool {
        $dataKeys = implode(", ",array_keys($data));
        $dataValues = implode("', '",$data);
        $q = "insert into kredit ($dataKeys) values ('$dataValues')";
        $this->db->transBegin();
        $exec = $this->db->query($q);
        if($exec){

            $this->db->transCommit();
            return true;
        } 
        
        $this->db->transRollback();
        return false;
    }
}