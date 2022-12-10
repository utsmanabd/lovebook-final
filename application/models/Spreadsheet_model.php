<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Spreadsheet_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('product')->result(); 
    }

    public function input_data($data,$table){
        $this->db->insert($table, $data);
    }
}