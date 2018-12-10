<?php

class Usuario extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('usuarios_model');
		$this->load->model('sesiones_model');
	}

	function index() {
		$data['usuarios'] = $this->Usuario_model->get_all_usuarios();

		$data['_view'] = 'usuario/index';
		$this->load->view('layouts/main', $data);
	}
	function realizar_pedido() {
		$this->load->view('realizar_pedido');
	}

	function add() {
		$this->load->library('form_validation');
		$this->load->helper('form');

		$this->form_validation->set_rules('dni', 'Dni', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('correo', 'Correo', 'required');
		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('clave', 'Clave', 'required');

		$usuario = $this->sesiones_model->verificar_ref($this->input->post('usuario'));
		if ($usuario) {
			$data['error'] = 'Nombre de usuario ya existe.';
			$this->load->view('login', $data);
			return;
		}

		$referido_by = $this->input->post('afiliado') ? $this->input->post('afiliado') : 'none';

		if ($this->form_validation->run()) {
			$params = array(
				'clave' => $this->input->post('clave'),
				'dni' => $this->input->post('dni'),
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'correo' => $this->input->post('correo'),
				'usuario' => $this->input->post('usuario'),
				'valido_correo' => 'no',
				'status' => 'inactivo',
				'referido_por' => $referido_by,
			);
			$usuario_id = $this->usuarios_model->add_usuario($params);
			$url = base_url() . "verificar/" . $usuario_id;
			//datos aqui del server
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'velautecdev5@gmail.com',
				'smtp_pass' => 'Creatividad123',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				//'charset' => 'iso-8859-1',
			);
			$this->load->library('email', $config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			//Email content
			$htmlContent = '<p>Por favor siga el siguiente enlace para activar su cuenta</p><br>';
			$htmlContent .= '<a href="' . $url . '"> ' . $url . '</a>';

			$this->email->from('verificar@b2b.com', 'B2b');
			$this->email->to($this->input->post('correo'));
			$this->email->subject('Activación de cuenta B2B');
			$this->email->message($htmlContent);

			$this->email->send();
			if ($this->email->send(FALSE)) {
				echo $this->email->print_debugger();
			}

			redirect('login');
		} else {
			$data['_view'] = 'usuario/add';
			$this->load->view('registro', $data);
		}
	}
	function agregar_referido() {
		$this->load->library('form_validation');
		$this->load->helper('form');

		$this->form_validation->set_rules('dni', 'Dni', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('correo', 'Correo', 'required');
		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('clave', 'Clave', 'required');

		$usuario = $this->sesiones_model->verificar_ref($this->input->post('usuario'));
		if ($usuario) {
			$data['error'] = 'Nombre de usuario ya existe.';
			$this->load->view('registrar_referido', $data);
			return;
		}

		if ($this->form_validation->run()) {
			$params = array(
				'clave' => $this->input->post('clave'),
				'dni' => $this->input->post('dni'),
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'correo' => $this->input->post('correo'),
				'usuario' => $this->input->post('usuario'),
				'valido_correo' => 'no',
				'status' => 'inactivo',
				'referido_por' => $_SESSION['usuario'],
			);
			$usuario_id = $this->usuarios_model->add_usuario($params);
			$url = base_url() . "verificar/" . $usuario_id;
			//datos aqui del server
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'velautecdev5@gmail.com',
				'smtp_pass' => 'Creatividad123',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				//'charset' => 'iso-8859-1',
			);
			$this->load->library('email', $config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			//Email content
			$htmlContent = '<p>Por favor siga el siguiente enlace para activar su cuenta</p><br>';
			$htmlContent .= '<a href="' . $url . '"> ' . $url . '</a>';

			$this->email->from('verificar@b2b.com', 'B2b');
			$this->email->to($this->input->post('correo'));
			$this->email->subject('Activación de cuenta B2B');
			$this->email->message($htmlContent);

			$this->email->send();
			if ($this->email->send(FALSE)) {
				echo $this->email->print_debugger();
			}

			$data['msj'] = 'Usuario registrado exitosamente.';
			$this->load->view('registrar_referido', $data);
			return;
		} else {
			$this->load->view('registrar_referido');
		}
	}
	function referidos() {
		if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
			$data['usuarios'] = $this->usuarios_model->get_all_usuarios();

			$this->load->view('referidos', $data);
		} else {
			redirect('cliente');
		}
	}
	function listado_referidos() {
		$data['usuarios'] = $this->usuarios_model->get_all_usuarios_by_user($_SESSION['usuario']);

		$this->load->view('all_referidos', $data);
	}

	function consultar($user) {
		$data['usuario'] = $this->usuarios_model->get_user_by_name($user);

		$this->load->view('usuario', $data);
	}

	function editar($user) {
		$data['usuario'] = $this->usuarios_model->get_user_by_name($user);

		$this->load->view('usuario', $data);
	}

	function arbol_referidos() {
		$dbh = new PDO('mysql:host=' . $this->db->hostname . ';dbname=' . $this->db->database . '', $this->db->username, $this->db->password);
		$dbs = $dbh->query("SELECT usuario as name, referido_por from usuarios");
		$dbs->execute();

		$row = $dbs->fetchAll(PDO::FETCH_ASSOC);
		$tree = $this->buildTree($row, $_SESSION['usuario']);
		$final = array("name" => $_SESSION['usuario'], "referido_por" => "", "children" => $tree);
		$data['usuarios'] = json_encode($final, JSON_PRETTY_PRINT);
		$this->load->view('arbol_referidos', $data);
	}

	function buildTree(array $elements, $parentId = null) {

		$branch = array();

		foreach ($elements as $element) {
			if ($element['referido_por'] == $parentId) {
				$children = $this->buildTree($elements, $element['name']);

				if ($children) {
					$element['children'] = $children;
				}
				$branch[] = $element;
			}
		}
		return $branch;
	}

}
