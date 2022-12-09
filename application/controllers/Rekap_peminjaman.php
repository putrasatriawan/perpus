<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rekap_peminjaman extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('peminjaman_model');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Username atau Password Salah !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('auth');
            date_default_timezone_set("Asia/Jakarta");
        }
    }

    public function index()

    {
        $data['peminjaman'] = $this->peminjaman_model->get_data_peminjaman()->result();

        $this->load->view('peminjaman/rekap_peminjaman', $data);
        $this->load->view('templates/footer', array('data' => $data,));
    }
}