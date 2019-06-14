<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_database extends CI_Model 
{
    public function getData($table){
        return $this->db->get($table)->result();
    }
}
