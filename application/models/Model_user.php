<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('auth');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert('auth', $data);
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('auth', $data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('auth', $data);
    }
}

/* End of file .php */
