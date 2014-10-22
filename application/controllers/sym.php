<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sym extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
public function index()
	{
		$this->load->view('login');
	}
public function muestradefault()
	{
		$this->load->view('home');
	}
public function muestraabout()
	{
		$this->load->view('about');
	}
}