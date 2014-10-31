<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sym extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
public function index()
	{
		$misdatos=array(
					'informacion'=>$this->sym_modelo->buscarmisdatos(950),
					);
					$this->load->view('login', $misdatos);
	}
public function muestradefault()
	{
		$this->load->view('home');
	}
public function muestraabout()
	{
		$this->load->view('about');
	}
public function regexito()
	{
		$this->load->view('regexit');
	}
public function muestraregistro()
	{
	
		if($_POST)
		{
			$misdatos=array(
					'nombre'=>$this->input->post('nombre'),
					'apellido'=>$this->input->post('apellido'),
					'fechadenacimiento'=>$this->input->post('fechadenacimiento'),
					'sexo'=>$this->input->post('sexo'),
					'dni'=>$this->input->post('dni'),
					'email'=>$this->input->post('email'),
					'usuario'=>$this->input->post('user'),
					'clave'=>$this->input->post('password'),
					);
			$this->sym_modelo->registrar($misdatos);
			redirect("index.php/Sym/regexito");
		}
		$this->load->view('registrar');
		
	}
public function muestracontacto()
	{
		$this->load->view('contact');
	}
public function validar()
	{
		if($_POST)
		{
			if(isset($_POST['btn_validar']))
			{
				$datos=array(
				'usuario' => $this->input->post('usuario'),
				'clave' => $this->input->post('clave'),
				);
				$datos_usuario=$this->sym_modelo->buscarusuario($datos);
				//La funcion si encuentra el ussuario trae resultado
				if($datos_usuario->result())
				{
					$this->session->set_userdata('idusuario', $datos_usuario->row()->idusuario);
					$misdatos=array(
					'informacion' =>$this->sym_modelo->buscarmisdatos($datos_usuario->row()->idusuario),
					);
					$this->load->view('login', $misdatos);
				}
				
				else
				{
					$misdatos=array(
					'informacion'=>$this->sym_modelo->buscarmisdatos(950),
					);
					$this->load->view('login', $misdatos);
				}
				
			}
		}
	
	
	
		
	}
}