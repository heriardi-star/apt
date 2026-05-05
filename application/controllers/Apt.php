<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apt extends CI_Controller {
    public function index() {

       $this->load->model('Aptmodel');
       $data['data']=$this->Aptmodel->tampil_data();
       $this->load->view('index',$data);
    }
}