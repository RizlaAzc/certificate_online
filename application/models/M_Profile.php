<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Profile extends CI_Model
{
    function getDataProfile()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function insertDataProfile($data)
    {
        $this->db->insert('users', $data);
    }

    function getDataProfileDetail($id)
    {
        $this->db->where('user_id', $id);
        $query =  $this->db->get('users');
        return $query->row();
    }

    function updateDataProfile($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }

    function hapusDataProfile($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }
}
