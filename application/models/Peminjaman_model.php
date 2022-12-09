<?php

class Peminjaman_model extends CI_model
{

  public function id_pm()
  {
    $this->db->select('RIGHT(peminjaman.id_pm, 3) as code', FALSE);
    $this->db->order_by('id_pm', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('peminjaman');

    if ($query->num_rows() > 0) {
      $data = $query->row();
      $code = intval($data->code) + 1;
    } else {
      $code = 1;
    }

    $codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
    $coderesult = "PM" . $codemax;
    return $coderesult;
  }

  public function get_data_peminjaman()
  {
    $this->db->select('peminjaman.*, anggota.nama_anggota as nama_anggota, buku.judul_buku as judul_buku');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
    $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
    // $this->db->order_by('id_pm', 'DESC');
    $result = $this->db->get();
    return $result;
  }

  public function get_data_by_buku($id)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
    $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
    $this->db->where('peminjaman.id_buku', $id);
    return $this->db->get()->row_array();
  }
  public function get_data_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
    $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
    $this->db->where('peminjaman.id_pm', $id);
    return $this->db->get()->row_array();
  }

  public function delete($id)
  {
    $this->db->where('id_pm', $id);
    $this->db->delete('peminjaman');
  }

  public function get_data_jumlah($jumlah)
  {

    $this->db->select('buku.*, pengarang.nama_pengarang as pengarang, penerbit.nama_penerbit as penerbit');
    $this->db->from('buku');
    $this->db->join('pengarang', 'pengarang.id_pengarang = buku.id_pengarang');
    $this->db->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit');
    $this->db->order_by('id_buku', 'DESC');
    $this->db->where('jumlah', $jumlah);

    $result = $this->db->get()->row();

    return $result;
  }

  public function insert_data_jumlah($id_buku)
  {
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku');
  }

  public function get_data_buku()
  {

    $this->db->select('buku.*, pengarang.nama_pengarang as pengarang, penerbit.nama_penerbit as penerbit');
    $this->db->from('buku');
    $this->db->join('pengarang', 'pengarang.id_pengarang = buku.id_pengarang');
    $this->db->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit');
    $this->db->order_by('id_buku', 'DESC');
    $result = $this->db->get();

    return $result;
  }
}