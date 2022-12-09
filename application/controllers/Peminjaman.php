<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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
        }
    }


    public function index()
    {
        $data['content'] = 'peminjaman/peminjaman';
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->peminjaman_model->get_data_peminjaman()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('peminjaman/peminjaman', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahPeminjaman()
    {
        $data['content'] = 'peminjaman/tambah_peminjaman';
        $data['title']   = 'Form Tambah Peminjaman';
        $data['id_pm'] = $this->peminjaman_model->id_pm();
        $data['peminjam'] = $this->db->get('anggota')->result();
        $data['buku'] = $this->db->get('buku')->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('peminjaman/tambah_peminjaman', $data);
        $this->load->view('templates/footer', $data);
    }

    public function simpan()
    {
        $id_buku = $this->input->post('id_buku');
        $jumlah = $this->db->query("SELECT * FROM buku WHERE id_buku = '$id_buku'")->row()->jumlah;

        $stok_pnjm = $jumlah - 1;
        $jumlah_pnjm = 1;

        // $jumlah_pnjm = $this->input->post('jumlah_pnjm');

        $jumlah_pnjm1 = array(
            'jumlah_pnjm' => 1,
        );
        $data = array(
            'id_pm'       => $this->input->post('id_pm'),
            'id_anggota'  => $this->input->post('id_anggota'),
            'id_buku'     => $this->input->post('id_buku'),
            'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
        );

        $datax = array(
            'jumlah' => $stok_pnjm,
        );

        // $dataxl = array(
        //     ''
        // ) 
        // $jumlah = $jumlah - 1;

        $this->db->insert('peminjaman', $data);

        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $datax);

        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil ditambahkan');
            redirect('peminjaman');
        }
    }

    public function kembalikan($id)
    {

        $data = $this->peminjaman_model->get_data_by_id($id);

        $id_buku = $data['id_buku'];


        $kembalikan = array(
            'id_anggota'       => $data['id_anggota'],
            'id_buku'          => $data['id_buku'],
            'tgl_pinjam'       => $data['tgl_pinjam'],
            'tgl_kembali'      => $data['tgl_kembali'],
            'tgl_pengembalian' => date('Y-m-d'),

        );
        // $pengambalian = array(
        //     // 'id_anggota'       => $data['id_anggota'],
        //     'id_buku'          => $data['id_buku'],
        //     // 'tgl_pinjam'       => $data['tgl_pinjam'],
        //     // 'tgl_kembali'      => $data['tgl_kembali'],
        //     // 'tgl_pengembalian' => date('Y-m-d'),
        //     'jumlah' => $data['jumlah'],

        // );
        $stok_pnjm = $data['jumlah'] + 1;

        $datax = array(
            // 'id_anggota'       => $data['id_anggota'],
            'id_buku'          => $data['id_buku'],
            // 'tgl_pinjam'       => $data['tgl_pinjam'],
            // 'tgl_kembali'      => $data['tgl_kembali'],
            // 'tgl_pengembalian' => date('Y-m-d'),
            'jumlah' => $stok_pnjm,
        );



        $query1 =  $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $datax);
        $query = $this->db->insert('pengembalian', $kembalikan);
        $this->peminjaman_model->delete($id);

        $this->session->set_flashdata('info', 'Buku berhasil dikembalikan');
        redirect('peminjaman');
    }
}