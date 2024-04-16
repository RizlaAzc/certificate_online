<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Event extends CI_Model
{
    function getDataEvent()
    {
        $query = $this->db->get('events');
        return $query->result();
    }

    function insertDataEvent($data)
    {
        $this->db->insert('events', $data);
    }

    function getDataEventDetail($id)
    {
        $this->db->where('event_id', $id);
        $query =  $this->db->get('events');
        return $query->row();
    }

    function updateDataEvent($id, $data)
    {
        $this->db->where('event_id', $id);
        $this->db->update('events', $data);
    }

    function hapusDataEvent($id)
    {
        $this->db->where('event_id', $id);
        $this->db->delete('events');
    }
}
