<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Certificate extends CI_Controller {

	public function __construct() {

		parent::__construct();
		
		$this->load->model('M_Certificate');
		$this->load->model('M_Event');

		if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin');
        }
		
	}

	public function index()
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Certificates - Certificate Online';

		$year['year'] = date('Y');

		$certificate = $this->M_Certificate->getDataCertificate();
		$event = $this->M_Event->getDataEvent();
		$users = $this->db->query("SELECT * FROM users WHERE level='user'")->result();

		$data['certificate'] = $certificate;
		$data['event'] = $event;
		$data['users'] = $users;

		$this->load->view('admin/_partials/_head', $title);
		$this->load->view('admin/_partials/_navbar', $profil);
		$this->load->view('admin/_partials/_sidebar');
		$this->load->view('admin/pages/certificate/V_Certificate', $data);
		$this->load->view('admin/_partials/_footer', $year);
	}

	public function edit($id)
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Edit Certificates - Certificate Online';

		$year['year'] = date('Y');

		$certificate = $this->M_Certificate->getDataCertificateDetail($id);
		$event = $this->M_Event->getDataEvent();
		$users = $this->db->query("SELECT * FROM users WHERE level='user'")->result();

		$data['certificate'] = $certificate;
		$data['event'] = $event;
		$data['users'] = $users;

		$this->load->view('admin/_partials/_head', $title);
		$this->load->view('admin/_partials/_navbar', $profil);
		$this->load->view('admin/_partials/_sidebar');
		$this->load->view('admin/pages/certificate/V_Edit', $data);
		$this->load->view('admin/_partials/_footer', $year);
	}

	public function fungsi_tambah()
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $user_id = $this->input->post('user_id');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $certificate_text = $this->input->post('certificate_text');

        $ArrInsert = array(
            'user_id' => $user_id,
            'event_name' => $event_name,
            'event_date' => $event_date,
            'certificate_text' => $certificate_text
        );

        $this->M_Certificate->insertDataCertificate($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Certificate added successfully!</div>');
		redirect($_SERVER['HTTP_REFERER']);
    }

	public function fungsi_edit()
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $id = $this->input->post('certificate_id');
        $user_id = $this->input->post('user_id');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $certificate_text = $this->input->post('certificate_text');

        $ArrUpdate = array(
            'certificate_id' => $id,
            'user_id' => $user_id,
            'event_name' => $event_name,
            'event_date' => $event_date,
            'certificate_text' => $certificate_text
        );

        $this->M_Certificate->updateDataCertificate($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Certificate edited successfully!</div>');
        redirect(base_url('admin/generate_certificate'));
    }

	public function fungsi_hapus($id)
    {
        $profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->M_Certificate->hapusDataCertificate($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Certificate deleted successfully!</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
