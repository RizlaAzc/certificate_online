<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin');
        }
		
	}

	public function index()
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Dashboard - Certificate Online';
		
		$year['year'] = date('Y');

		$this->load->view('admin/_partials/_head', $title);
		$this->load->view('admin/_partials/_navbar', $profil);
		$this->load->view('admin/_partials/_sidebar');
		$this->load->view('admin/pages/V_Dashboard');
		$this->load->view('admin/_partials/_footer', $year);
	}
}
