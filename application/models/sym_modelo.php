<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sym_modelo extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
public function buscarusuario($datos)
	{
		$valor=array(
		'usuario' => $datos['usuario'],
		'clave' => $datos['clave'],
		);
		return $this->db->get_where('login', $valor);
	}
public function buscarmisdatos($id)
	{
		$consulta = $this->db->query("select * from usuario where idusuario = $id");
		return $consulta;
	}

}
?>