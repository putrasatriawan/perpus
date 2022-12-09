<?php

class Dashboard_model extends CI_model
{
    public function total_buku($total_buku)
    {
        $query = $this->db->query("SELECT * FROM buku");
        $total_buku = $query->num_rows();
        return $total_buku;
    }
}
