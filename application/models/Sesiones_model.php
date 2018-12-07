<?php
class Sesiones_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function user_login($usuario, $clave) {
		// compruebo si esta en usuarios y si tiene clave
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $usuario);
		$this->db->where('clave', $clave);
		$query = $this->db->get();
		$user = $query->row();
		if ($query->num_rows() == 1) {
			$result = array('is_user' => true, 'cliente' => $query->result());
			return $result;
		}
	}

	public function verificar_id($id) {
		// compruebo si esta en usuarios y si tiene clave
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$user = $query->row();
		if ($query->num_rows() >= 1) {
			$data = array(
				'status' => 'activo',
			);
			$this->db->where('id', $id);
			$this->db->update('usuarios', $data);
			return true;
		} else {
			return false;
		}
	}
	public function verificar_ref($cod_afiliado) {
		// compruebo si esta en usuarios
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $cod_afiliado);
		$query = $this->db->get();
		$user = $query->row();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

}
