<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aptmodel extends CI_Model{

        public function tampil_data(){
            $query=$this->db->get('sertifikasi_eksternal');
            return $query->result();
       
       }
    }
    

?>