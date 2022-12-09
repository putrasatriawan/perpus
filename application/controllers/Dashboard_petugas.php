<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
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
        }
    }
    public function index()
    {
        $data = array(
            'title' => 'Dahsboard Petugas',
        );
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar', $data);
        $this->load->view('templates_user/topbar', $data);
        $this->load->view('petugas/dashboard_petugas', $data);
        $this->load->view('templates_user/footer', $data);
    }
}
