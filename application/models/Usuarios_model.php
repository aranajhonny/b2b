<?php

class Usuarios_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function get_user_by_name($usuario) {
		return $this->db->get_where('usuarios', array('usuario' => $usuario))->row_array();
	}

	function get_all_usuarios() {
		$this->db->order_by('id', 'desc');
		$this->db->where('tipo_user', 1);
		return $this->db->get('usuarios')->result_array();
	}
	function get_all_usuarios_by_user($user) {
		$this->db->order_by('id', 'desc');
		$this->db->where('tipo_user', 1);
		$this->db->where('referido_por', $user);
		return $this->db->get('usuarios')->result_array();
	}
	function add_usuario($params) {
		$this->db->insert('usuarios', $params);
		return $this->db->insert_id();
	}

}
