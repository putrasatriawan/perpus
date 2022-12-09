<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pengembalian_model');
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
    }
  }

  public function index()
  {
    $data['content'] = 'pengembalian/pengembalian';
    $data['title'] = 'Data Pengembalian';
    $data['pengembalian'] = $this->pengembalian_model->get_data_pengembalian()->result();

    // var_dump($data['pengembalian']);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pengembalian/pengembalian', $data);
    $this->load->view('templates/footer', $data);
  }
}