<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
     
class ChartController extends CI_Controller {  
    /** 
     * This method is used to get all the data. 
     * 
     * @It will return Response 
    */  
    public function __construct() {  
       parent::__construct(); 
    }   
    
    /** 
     * This method is used to get all the data. 
     * 
     * @It will return Response 
    */  
    public function index()  
    {  
        $query = $this->db->query("SELECT SUM(numberofclick) as count FROM demo_click   
            GROUP BY YEAR(created_at) ORDER BY created_at");   
        $data['click'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);  
     
        $query = $this->db->query("SELECT SUM(numberofview) as count FROM demo_viewer   
            GROUP BY YEAR(created_at) ORDER BY created_at");   
        $data['viewer'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);  

        $this->load->view('my_chart', $data);  
    }  
}  
?>