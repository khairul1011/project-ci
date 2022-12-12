<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller{


    public function __construct()

    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    function index()
    {
        $data ["judul"] = "Halaman Prodi";
        $data ["prodi"] = $this->Prodi_model->get();
        $this->load->view("layouts/header", $data);
        $this->load->view("prodi/vw_prodi");
        $this->load->view("layouts/footer");
        
    }

}
