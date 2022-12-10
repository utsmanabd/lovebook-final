<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_m extends CI_Model
{
    function get_product(){
        $this->db->select('*');
        $this->db->from('product');
        // $this->db->join('category', 'category.id = product.id_category');
        $this->db->where('product.is_available', 1);
        $this->db->order_by('title', 'RANDOM');
        $query = $this->db->get();
        return $query;
    }

    function get_fiksi(){
        $this->db->select('*');
        $this->db->from('product');
        // $this->db->join('category', 'category.id = product.id_category');
        $this->db->where('product.is_available', 1);
        $this->db->where('product.id_category', 5);
        $this->db->order_by('title', 'RANDOM');
        $query = $this->db->get();
        return $query;
    }

    function get_nonfiksi(){
        $this->db->select('*');
        $this->db->from('product');
        // $this->db->join('category', 'category.id = product.id_category');
        $this->db->where('product.is_available', 1);
        $this->db->where('product.id_category', 6);
        $this->db->order_by('title', 'RANDOM');
        $query = $this->db->get();
        return $query;
    }
}

