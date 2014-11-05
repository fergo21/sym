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
		$consulta = $this->db->query("select usuario.*, login.* from usuario, login where usuario.idusuario = login.idusuario and usuario.idusuario = $id");
		return $consulta;
	}
public function registrar($datos)
	{
		$valor=array(
		'nombre' => $datos['nombre'],
		'apellido' => $datos['apellido'],
		'fecha_de_nacimiento' => $datos['fechadenacimiento'],
		'sexo' => $datos['sexo'],
		'dni' => $datos['dni'],
		'mail' => $datos['email'],
		'idtipo' => 1,
		);
		$this->db->insert('usuario', $valor);
		
		//Acabamos de insertar un nuevo usuario pero necesitamos el id que obtuvo al insertarse para poder relacionarse con la tabla login
		
		$resultado=$this->db->query("select * from usuario where dni ='".$valor['dni']."'");
		
		$id=$resultado->row()->idusuario;
		
		$valor=array(
		'usuario' => $datos['usuario'],
		'clave' => $datos['clave'],
		'idusuario' => $id,
		);
		
		$this->db->insert('login', $valor);
	}
	public function actualizarperfil($datos)
	{
		$valor=array(
		'nombre' => $datos['nombre'],
		'apellido' => $datos['apellido'],
		'fecha_de_nacimiento' => $datos['fechadenacimiento'],
		'sexo' => $datos['sexo'],
		'dni' => $datos['dni'],
		'mail' => $datos['email'],
		'idtipo' => 1,
		);
		$donde=array(
		'idusuario'=>$this->session->userdata['idusuario'],
		);
		$this->db->where($donde);
		$this->db->update('usuario', $valor);
		
		//Acabamos de insertar un nuevo usuario pero necesitamos el id que obtuvo al insertarse para poder relacionarse con la tabla login
		
		$resultado=$this->db->query("select * from usuario where dni ='".$valor['dni']."'");
		
		$id=$resultado->row()->idusuario;
		
		$valor=array(
		'clave' => $datos['clave'],
		);
		$this->db->where($donde);
		$this->db->update('login', $valor);
	}
public function registrarcontenido($datos)
	{
		$valor=array(
					'titulo'=>$datos['titulo'],
					'fecha'=>$datos['fecha'],
					'descripcion'=>$datos['descripcion'],
					'idusuario'=>$datos['idusuario'],
		);
		$this->db->insert('contenido', $valor);
	}
public function buscarcontenido()
	{
		$consulta = $this->db->query("select * from contenido");
		return $consulta;
	}
}
?>