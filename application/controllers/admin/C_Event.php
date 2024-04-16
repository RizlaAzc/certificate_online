<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Event extends CI_Controller {

	public function __construct() {

		parent::__construct();
		
		$this->load->model('M_Event');

		if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin');
        }
		
	}

	public function index()
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Events - Certificate Online';

		$year['year'] = date('Y');

		$event = $this->M_Event->getDataEvent();

		$data['event'] = $event;

		$this->load->view('admin/_partials/_head', $title);
		$this->load->view('admin/_partials/_navbar', $profil);
		$this->load->view('admin/_partials/_sidebar');
		$this->load->view('admin/pages/event/V_Event', $data);
		$this->load->view('admin/_partials/_footer', $year);
	}

	public function edit($id)
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Edit Events - Certificate Online';

		$year['year'] = date('Y');

		$event = $this->M_Event->getDataEventDetail($id);

		$data['event'] = $event;

		$this->load->view('admin/_partials/_head', $title);
		$this->load->view('admin/_partials/_navbar', $profil);
		$this->load->view('admin/_partials/_sidebar');
		$this->load->view('admin/pages/event/V_Edit', $data);
		$this->load->view('admin/_partials/_footer', $year);
	}

	public function fungsi_tambah()
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $location = $this->input->post('location');
        $organizer = $this->input->post('organizer');

        $ArrInsert = array(
            'event_name' => $event_name,
            'event_date' => $event_date,
            'location' => $location,
            'organizer' => $organizer
        );

        $this->M_Event->insertDataEvent($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Event added successfully!</div>');
		redirect($_SERVER['HTTP_REFERER']);
    }

	public function fungsi_edit()
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $id = $this->input->post('event_id');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $location = $this->input->post('location');
        $organizer = $this->input->post('organizer');

        $ArrUpdate = array(
            'event_id' => $id,
            'event_name' => $event_name,
            'event_date' => $event_date,
            'location' => $location,
            'organizer' => $organizer
        );

        $this->M_Event->updateDataEvent($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Event edited successfully!</div>');
        redirect(base_url('admin/event'));
    }

	public function fungsi_hapus($id)
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->M_Event->hapusDataEvent($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Event deleted successfully!</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
