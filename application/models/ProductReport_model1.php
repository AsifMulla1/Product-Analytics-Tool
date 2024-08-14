<?php
  class ProductReport_model extends CI_Model {
    
    public function __construct()
    {
      $this->load->database();
    }


    public function ProductNm()
    {      

      $this->db->select('product_master.*'); 
      $this->db->from('product_master');
      $query = $this->db->get();
      return $query->result();
              
    }
    
    public function ProductType()
    {      

      $this->db->select('category_master.*'); 
      $this->db->from('category_master');
      $query = $this->db->get();
      return $query->result();
              
    }
    public function Company()
    {      

      $this->db->select('company_master.*'); 
      $this->db->from('company_master');
      $query = $this->db->get();
      return $query->result();
              
    }
    public function Prodect()
    {      
        $this->db->select('product_master.productcode'); 
        $this->db->from('product_master');
        $this->db->group_by('product_master.productcode'); 
        $query = $this->db->get();
        return $query->result();
    }
 

    public function Reportdetails($productName,$categoryName,$companyName,$productcode)
    {

      $this->db->select('product_master.*,category_master.categoryName,company_master.companyName'); 

      $this->db->join('category_master','product_master.fkproducttypeId = category_master.categoryId','left'); 

      $this->db->join('company_master','product_master.fkcompanyId = company_master.companyId','left');

      $this->db->from('product_master');


      if (!empty($productName))
      {
        $this->db->where('product_master.productId', $productName);
      }
      if (!empty($categoryName))
      {
        $this->db->where('category_master.categoryId', $categoryName);
      }
      if (!empty($productcode))
      {
        $this->db->where('product_master.productcode', $productcode);
      }
      

      $query = $this->db->get();
      return $query->result();

    }


  }
?>