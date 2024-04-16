<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Users extends CI_Model
{
    function getDataUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function insertDataUsers($data)
    {
        $this->db->insert('users', $data);
    }

    function getDataUsersDetail($id)
    {
        $this->db->where('user_id', $id);
        $query =  $this->db->get('users');
        return $query->row();
    }

    function updateDataUsers($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }

    function hapusDataUsers($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }
}
