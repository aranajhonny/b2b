<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesiones extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('sesiones_model');
	}

	public function index() {
		$data = new stdClass();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario', 'usuario', 'required|alpha_numeric');
		$this->form_validation->set_rules('clave', 'clave', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			// capturo variables desde el formulario
			$usuario = $this->input->post('usuario');
			$clave = $this->input->post('clave');
			// invoco la funcion que verfifica usuario y contraseña
			$result = $this->sesiones_model->user_login($usuario, $clave);
			$row = $result["cliente"][0];
			// 0 es admin
			// 1 es cliente
			if ($result['is_user']) {
				if ($row->status == 'inactivo') {
					$data = array('error' => 'Usuario no activo, por favor verifique su correo');
					$this->load->view('login', $data);
				} elseif ($row->status == 'activo') {
					if ($row->tipo_user == 0) {
						$userdata = array(
							'id' => $row->id,
							'usuario' => $row->usuario,
							'admin' => true,
							'link_refer' => base_url() . 'registro/' . $row->usuario,
							'logged_in' => true,
						);
						$this->session->set_userdata($userdata);
						redirect('admin');
					}
					if ($row->tipo_user == 1) {
						$userdata = array(
							'id' => $row->id,
							'usuario' => $row->usuario,
							'status' => $row->status,
							'link_refer' => base_url() . 'registro/' . $row->usuario,
							'logged_in' => true,
						);
						$this->session->set_userdata($userdata);
						redirect('cliente');
					}
				}
			} else {
				$data = array('error' => 'Acceso Denegado');
				$this->load->view('login', $data);
			}
		}
	}

	public function reg() {
		$this->load->helper('form');
		$this->load->view('registro');
	}
	public function reg_afiliado($cod_afiliado = NULL) {
		$this->load->helper('form');
		$Ref = $this->sesiones_model->verificar_ref($cod_afiliado);
		if ($Ref) {
			$data['cod_afiliado'] = $cod_afiliado;
			$this->load->view('registro', $data);
		} else {
			$this->load->view('registro');
		}
	}
	public function verificar($id = NULL) {
		if (!$id) {
			redirect('login');
		}
		$isId = $this->sesiones_model->verificar_id($id);
		if ($isId) {
			redirect('login');
		} else {
			redirect('login');
		}
	}

	public function logout() {
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		redirect("login");
	}

}
