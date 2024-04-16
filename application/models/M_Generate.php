<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Generate extends CI_Model
{
    function getDataGenerate()
    {
        $query = $this->db->get('certificate_assignments');
        return $query->result();
    }

    function insertDataGenerate($data)
    {
        $this->db->insert('certificate_assignments', $data);
    }

    function getDataGenerateDetail($id)
    {
        $this->db->where('assignment_id', $id);
        $query =  $this->db->get('certificate_assignments');
        return $query->row();
    }

    function updateDataGenerate($id, $data)
    {
        $this->db->where('assignment_id', $id);
        $this->db->update('certificate_assignments', $data);
    }

    function hapusDataGenerate($id)
    {
        $this->db->where('assignment_id', $id);
        $this->db->delete('certificate_assignments');
    }
}
