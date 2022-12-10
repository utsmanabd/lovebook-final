<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {

    public function proses_tampil(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product.is_available', 1);
        $sql = $this->db->get();
        return $sql;
    }

    public function get_detail($id = NULL){
        $query = $this->db->get_where('product', array('slug' => $id))->row;
        return $query;
    }
}

?>