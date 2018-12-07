<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
		} else {
			redirect('login');
		}
	}
	public function cliente() {
		if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
			redirect('admin');
		} else {
			$this->load->view('cliente');
		}
	}
	public function admin() {
		$data['num_users'] = $this->db->count_all_results('usuarios');

		$this->db->where('status', 'activo');
		$this->db->from('usuarios');
		$data['act_users'] = $this->db->count_all_results();
		$this->load->view('admin', $data);
	}
}
