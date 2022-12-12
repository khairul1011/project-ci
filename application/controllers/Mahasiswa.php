<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{


    public function __construct()

    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    function index()
    {
        $data ["judul"] = "Halaman Mahasiswa";
        $data ["mahasiswa"] = $this->Mahasiswa_model->get();
        $this->load->view("layouts/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa");
        $this->load->view("layouts/footer");
        
    }

    function tambah()
    {
        $data ["judul"] = "Halaman Tambah Mahasiswa";
        $this->load->view("layouts/header", $data);
        $this->load->view("mahasiswa/vw_tambah_mahasiswa");
        $this->load->view("layouts/footer");
        
    }

    function detail($id)
    {
        $data ["judul"] = "Halaman Detail Mahasiswa";
        $data ['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layouts/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa",$data);
        $this->load->view("layouts/footer");
        
    }

    function upload()
    {
        $data = [
            'nama' => $this->input->POST('nama'),
            'nim' => $this->input->POST('nim'),
            'email' => $this->input->POST('email'),
            'prodi' => $this->input->POST('prodi'),
            'alamat' => $this->input->POST('alamat'),
            'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
            'asal_sekolah' => $this->input->POST('asal_sekolah'),
        ];

        $this->Mahasiswa_model->insert($data);
        redirect('Mahasiswa/');
        
    }

    function edit($id)
    {
        $data ["judul"] = "Halaman Edit Mahasiswa";
        $data ['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layouts/header", $data);
        $this->load->view("mahasiswa/vw_ubah_mahasiswa");
        $this->load->view("layouts/footer");
        
    }

    function update()
    {
        $data = [
            'nama' => $this->input->POST('nama'),
            'nim' => $this->input->POST('nim'),
            'email' => $this->input->POST('email'),
            'prodi' => $this->input->POST('prodi'),
            'alamat' => $this->input->POST('alamat'),
            'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
            'asal_sekolah' => $this->input->POST('asal_sekolah'),
        ];

        $id = $this->input->POST('id');
        $this->Mahasiswa_model->update(['id' => $id], $data);
        redirect('Mahasiswa/');
        
    }
   
}

