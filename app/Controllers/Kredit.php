<?php

namespace App\Controllers;

use \App\Models\ModelKredit;

class Kredit extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelKredit;
    }
    public function index()
    {
    }

    public function pengajuan()
    {
        $data['jenis_kelamin'] = $this->model->getSandi('JK');
        $data['status_nikah'] = $this->model->getSandi('SN');
        $data['jenis_relasi'] = $this->model->getSandi('JR');
        $data['jenis_bunga'] = $this->model->getSandi('JB');

        echo view('kredit/form-pengajuan', $data);
    }

    public function pengajuan_action()
    {

        $nama           = strtoupper($this->request->getVar('nama'));
        $nama_ibu       = strtoupper($this->request->getVar('nama_ibu'));
        $no_ktp         = $this->request->getVar('no_ktp');
        $npwp           = $this->request->getVar('npwp');
        $tempat_lahir   = strtoupper($this->request->getVar('tempat_lahir'));
        $tanggal_lahir  = $this->request->getVar('tanggal_lahir');
        $alamat         = strtoupper($this->request->getVar('alamat'));
        $jenis_kelamin  = $this->request->getVar('jenis_kelamin');
        $status_nikah   = $this->request->getVar('status_nikah');
        $no_hp          = $this->request->getVar('no_hp');
        $plafon         = str_replace(",", "", $this->request->getVar('plafon'));
        $jangka_waktu   = $this->request->getVar('jangka_waktu');
        $jenis_bunga    = $this->request->getVar('jenis_bunga');
        $nama_relasi    = $this->request->getVar('nama_relasi');
        $jenis_relasi   = $this->request->getVar('jenis_relasi');
        $alamat_realsi  = $this->request->getVar('alamat_relasi');
        $no_hp_relasi   = $this->request->getVar('no_hp_relasi');

        $kdcab          = session()->get('cabang_user');
        //$kd_jenis       = $this->request->getVar('kd_jenis');
        //$kdcab = "001";
        $kd_jenis       = "K";
        $counter        = $this->model->getCounterKredit($kd_jenis, $kdcab);
        $no_register    = $kd_jenis . $kdcab . date('Ym') . substr(str_repeat(0, 4) . $counter['counter'], -4);

        echo $no_register;
    }

    public function data_pengajuan()
    {
        echo view('kredit/data-pengajuan');
    }
}
