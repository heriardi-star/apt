<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aptmodel extends CI_Model{

    private $table='akreditasi';


    public function get_all(){
        return $this->db->get($this->table)->result();
    }
}

?>