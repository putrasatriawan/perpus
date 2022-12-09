<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    // List all your items
    public function index($offset = 0)
    {
        $data = array(
            'title' => 'User',
            'user' =>  $this->Model_user->get_all_data(),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('v_user', $data);
        $this->load->view('templates/footer', $data);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        $this->Model_user->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!');
        redirect('user');
    }

    //Update one item
    public function edit($id = NULL)
    {
        $data = array(
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        $this->Model_user->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit !!!');
        redirect('user');
    }

    //Delete one item
    public function delete($id = NULL)
    {
        $data = array(
            'id' => $id
        );
        $this->Model_user->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('user');
    }
}

/* End of file Controllername.php */
