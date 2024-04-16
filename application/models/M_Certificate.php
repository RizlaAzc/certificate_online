<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Certificate extends CI_Model
{
    function getDataCertificate()
    {
        $query = $this->db->get('certificates');
        return $query->result();
    }

    function insertDataCertificate($data)
    {
        $this->db->insert('certificates', $data);
    }

    function getDataCertificateDetail($id)
    {
        $this->db->where('certificate_id', $id);
        $query =  $this->db->get('certificates');
        return $query->row();
    }

    function updateDataCertificate($id, $data)
    {
        $this->db->where('certificate_id', $id);
        $this->db->update('certificates', $data);
    }

    function hapusDataCertificate($id)
    {
        $this->db->where('certificate_id', $id);
        $this->db->delete('certificates');
    }
}
