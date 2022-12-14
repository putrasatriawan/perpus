<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
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
        $data['content'] = 'buku/buku';
        $data['title']   = 'Daftar Data Buku';
        $data['buku'] = $this->buku_model->get_data_buku()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/buku', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahBuku()
    {
        $data['content'] = 'buku/tambah_buku';
        $data['title'] = 'Form Tambah Buku';
        $data['id_buku'] = $this->buku_model->id_buku();
        $data['pengarang'] = $this->db->get('pengarang')->result();
        $data['penerbit'] = $this->db->get('penerbit')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/tambah_buku', $data);
        $this->load->view('templates/footer', $data);
    }

    public function simpan()
    {
        $data = array(
            'id_buku'      => $this->input->post('id_buku'),
            'judul_buku'   => $this->input->post('judul_buku'),
            'id_pengarang' => $this->input->post('id_pengarang'),
            'id_penerbit'  => $this->input->post('id_penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'jumlah'       => $this->input->post('jumlah'),
        );
        $query = $this->db->insert('buku', $data);

        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('buku');
        }
    }

    public function edit($id)
    {
        $data['content'] = 'buku/edit_buku';
        $data['title'] = 'Form Edit Buku';
        $data['buku'] = $this->buku_model->edit($id);
        $data['pengarang'] = $this->db->get('pengarang')->result();
        $data['penerbit'] = $this->db->get('penerbit')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/edit_buku', $data);
        $this->load->view('templates/footer', $data);
    }


    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $data = array(
            'id_buku'      => $this->input->post('id_buku'),
            'id_pengarang' => $this->input->post('id_pengarang'),
            'id_penerbit'  => $this->input->post('id_penerbit'),
            'judul_buku'   => $this->input->post('judul_buku'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'jumlah'       => $this->input->post('jumlah'),
        );

        $query = $this->buku_model->update($id_buku, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil di-update');
            redirect('buku');
        }
    }

    public function delete($id)
    {
        $query = $this->buku_model->delete($id);

        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('buku');
        }
    }
}