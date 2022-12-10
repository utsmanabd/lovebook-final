<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends MY_Model 
{
	function get_product(){
        $this->db->select('*');
        $this->db->from('product');
        // $this->db->join('category', 'category.id = product.id_category');
        $query = $this->db->get();
        return $query;
    }

    function get_user(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.is_active', 1);
        $query = $this->db->get();
        return $query;
    }

    function get_order(){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('orders.status', 'delivered');
        $this->db->or_where('orders.status', 'paid');
        $query = $this->db->get();
        return $query;
    }

    function get_kategoriFiksi(){
        $this->db->select('*');
        $this->db->from('orders_detail');
        $this->db->join('product', 'product.id = orders_detail.id_product');
        $this->db->where('product.id_category', 5);

        $query = $this->db->get();
        return $query;
    }

    function get_kategoriNonfiksi(){
        $this->db->select('*');
        $this->db->from('orders_detail');
        $this->db->join('product', 'product.id = orders_detail.id_product');
        $this->db->where('product.id_category', 6);

        $query = $this->db->get();
        return $query;
    }

    function get_ordersDetail(){
        $this->db->select('*');
        $this->db->from('orders_detail');
        $this->db->join('orders', 'orders.id = orders_detail.id_orders');
        $this->db->where('orders.status', 'delivered');
        $this->db->or_where('orders.status', 'paid');

        $query = $this->db->get();
        return $query;
    }

    // function total_pendapatan(){
    //     $this->db->select_sum('total');
    //     $this->db->from('orders');
    //     $this->db->where('orders.status','delivered');
    //     $this->db->or_where('orders.status', 'paid');
    //     $query = $this->db->get();
    //     return $query;
    // }

    // function pendapatan(){
    //     return $this->db->query("SELECT SUM(total) as total FROM orders WHERE orders.status='delivered' OR orders.status='paid'");
    // }
}