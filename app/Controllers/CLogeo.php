<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CLogeo extends BaseController
{
    public function index()
    {
        echo view('VistaContenido/header');
        echo view('VistaContenido/body');
        echo view('VistaContenido/footer');
    }
}
