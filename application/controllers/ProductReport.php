<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductReport extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('ProductReport_model');
		
    } 

    public function index(){

        $data['productnamereport']=$this->ProductReport_model->ProductNm();
        $data['producttypereport']=$this->ProductReport_model->ProductType();
        $data['companyreport']=$this->ProductReport_model->Company();
        $data['productcode']=$this->ProductReport_model->productcode();

       

        $this->load->view('header');
        $this->load->view('ProductReport/ProductReport_view',$data);
        $this->load->view('footer');

    }

    public function GetData(){
        $productName = $this->input->post('productName');
        $categoryName = $this->input->post('categoryName');
        $companyName = $this->input->post('companyName');
        $productcode = $this->input->post('productcode');

        $data=$this->ProductReport_model->Reportdetails($productName,$categoryName,$companyName,$productcode);
     
        echo json_encode($data);
    }


// public function process_checked_ids() {
//     $checkedIds = $this->input->post('checkedIds');
    
//     if (is_array($checkedIds)) {
        
//         foreach ($checkedIds as &$id){
//             $id = intval($id);
//         }
//     } else {
//         $checkedIds = intval($checkedIds);
//     }

//     echo json_encode($checkedIds);
// }

 
}
