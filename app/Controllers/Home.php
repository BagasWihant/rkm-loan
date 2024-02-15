<?php

namespace App\Controllers;

ini_set('max_execution_time', 0);

use \App\Models\ModelKredit;

class Home extends BaseController
{
    public function index()
    {
        echo view('home');
    }
}
