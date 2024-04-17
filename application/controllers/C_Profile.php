<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Profile extends CI_Controller {

	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('');
        }
		
	}

	public function index()
	{
		$profil['profil'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$title['title'] = 'My Profile - Certificate Online';

		$year['year'] = date('Y');

		$this->load->view('user/_partials/_head', $title);
		$this->load->view('user/_partials/_navbar', $profil);
		$this->load->view('user/_partials/_sidebar');
		$this->load->view('user/pages/V_Profile');
		$this->load->view('user/_partials/_footer', $year);
	}

    public function fungsi_edit()
	{
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$full_name = $this->input->post('full_name');
		$photo = $_FILES['photo'];

		if ($photo = '') {
            $this->db->set('email', $email);
			$this->db->set('username', $username);
			$this->db->set('full_name', $full_name);
			// $this->db->set('photo', $photo);
			$this->db->where('email', $email);
			$this->db->update('users');
        } else {
            $config['upload_path'] = 'assets/images/profile';
            $config['allowed_types'] = 'jpg|png|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('photo')) {
                $this->db->set('email', $email);
				$this->db->set('username', $username);
				$this->db->set('full_name', $full_name);
				// $this->db->set('photo', $photo);
				$this->db->where('email', $email);
				$this->db->update('users');
            } else {
                $photo = $this->upload->data('file_name');
                $this->db->set('email', $email);
				$this->db->set('username', $username);
				$this->db->set('full_name', $full_name);
				$this->db->set('photo', $photo);
				$this->db->where('email', $email);
				$this->db->update('users');
            }
        }

		// $this->db->set('email', $email);
		// $this->db->set('username', $username);
		// $this->db->set('full_name', $full_name);
		// $this->db->set('photo', $photo);
		// $this->db->where('email', $email);
		// $this->db->update('users');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
