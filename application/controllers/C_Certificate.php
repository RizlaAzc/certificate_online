<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Certificate extends CI_Controller {

	public function __construct() {

		parent::__construct();
		
		$this->load->model('M_Generate');
		$this->load->model('M_Certificate');
		$this->load->model('M_Event');

		if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('');
        }
		
	}

	public function index()
	{
		$profil['profil'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$title['title'] = 'Generate Certificates - Certificate Online';

		$year['year'] = date('Y');

		$user_id = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$a = $user_id['user_id'];

		$generate = $this->db->query("SELECT * FROM certificate_assignments WHERE user_id=$a")->result();
		$certificate = $this->M_Certificate->getDataCertificate();
		$event = $this->M_Event->getDataEvent();
		$users = $this->db->query("SELECT * FROM users WHERE level='user'")->result();

		$data['generate'] = $generate;
		$data['certificate'] = $certificate;
		$data['event'] = $event;
		$data['users'] = $users;

		$this->load->view('user/_partials/_head', $title);
		$this->load->view('user/_partials/_navbar', $profil);
		$this->load->view('user/_partials/_sidebar');
		$this->load->view('user/pages/certificate/V_Certificate', $data);
		$this->load->view('user/_partials/_footer', $year);
	}

	public function download($id)
    {
        $certificate = $this->M_Certificate->getDataCertificateDetail($id);
        $event = $this->M_Event->getDataEventDetail($id);
		
        $data['certificate'] = $certificate;
        $data['event'] = $event;

        $this->load->library('dompdf_gen');
        $this->load->view('user/pages/certificate/V_Download', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Certificate.pdf', array('Attachment' => 0));
    }
}
