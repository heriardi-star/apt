<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apt extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Aptmodel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['apt']=$this->Aptmodel->get_all();
		$this->load->view('index',$data);
	}
}
