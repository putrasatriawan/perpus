<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_header');
            $this->load->view('v_login');
            $this->load->view('templates/auth_footer');
        } else {
            $auth = $this->Model_auth->cek_login();

            if ($auth == FALSE) {
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
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1:
                        redirect('Dashboard');
                        break;
                    case 2:
                        redirect('Dashboard_petugas');
                        break;

                    default:
                        break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
