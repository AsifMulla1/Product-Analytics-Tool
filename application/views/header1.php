<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets3/images/icon.png">
    <title><?php echo $this->session->userdata('orgName');?></title>     
    <!-- Custom CSS -->  
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets3/libs/select2/dist/css/select2.min.css">    
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link href="<?php echo base_url(); ?>dist/css/style.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>web_resources/dist/css/AdminLTE.min.css" rel="stylesheet">
       <!--  <link href="<?php echo base_url(); ?>web_resources/dist/css/Notification.css" rel="stylesheet"> -->
        <link href="<?php echo base_url(); ?>assets3/DataTables/datatables.css" rel="stylesheet">        
        <!--new custome css  -->
        <link href="<?php echo base_url(); ?>dist/css/style.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets3/libs/%40claviska/jquery-minicolors/jquery.minicolors.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>web_resources/dist/css/custom/parsley.css">
        <link rel="stylesheet" href="<?php echo base_url();?>web_resources/dist/css/sweetalert.css">
      <!--   <link href="<?php echo base_url(); ?>dist/css/steps.css" rel="stylesheet"> -->
      <link href="<?php echo base_url(); ?>\assets3/typeheadstyle.css" rel="stylesheet">
     <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
     <script>
        var base_path="<?php echo base_url();?>";
     </script>


</head>
<style type="text/css">
    .nav-item:hover
{
    background-color:white;
    color:white;
}
.saveclass{
    /* bottom: 95px;
   width: 90px;
        height:40px;
    margin-left: -151px; */
    
    color: #FFF;
    /* border-radius: 269px; */
    text-align: center;
     
    box-shadow: 2px 2px 2px #999;
    z-index: 100;
}
.spinner-7{
margin: 100px auto 0;
width: 70px;
text-align: center;
}
.spinner-7 > div {
width: 18px;
height: 18px;
background-color: #ff0018;
border-radius: 100%;
display: inline-block;
-webkit-animation: ms-bouncedelay 1.4s infinite ease-in-out both;
animation: ms-bouncedelay 1.4s infinite ease-in-out both;
}
.spinner-7 .bounce1 {
-webkit-animation-delay: -0.32s;
animation-delay: -0.32s;
}
.spinner-7 .bounce2 {
-webkit-animation-delay: -0.16s;
animation-delay: -0.16s;
}
#preloader-wrap{
display: flex;
justify-content: center;
align-items: center;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 20009;
background-color: #fff;
-webkit-transition: 0.3s;
transition: 0.3s;
}
#preloader-wrap.loaded{
visibility: hidden;
opacity: 0;
}
@-webkit-keyframes ms-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}
@keyframes ms-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% {
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
 
input.form-control.form-control-sm{
  height: 22px !important;
}
.col-sm-12.col-md-6{
  max-width: 50%;
}
.modal-content{
        height: auto !important;
}

@media(max-width: 768px){
    a.displaynoneForMob{
    display: none !important;
  }
  .dropdown-item{
    padding: .05rem 1.5rem !important;
  }
}

@media(min-width: 768px){
  a.displayNoneForDesktop{
    display: none;
  }

}
tr.odd{
    line-height: 12px !important;
}
tr.even{
    line-height: 12px !important;
}
.table td, .table th{
    padding: 10px !important;
}
/* aside.left-sidebar{
    box-shadow: 0 8px 17px 0 rgb(0 0 0 / 22%), 0 6px 20px 0 rgb(0 0 0 / 17%);
} */

</style>
<body>
   
    <div class="preloader">


       
           <div id="preloader-wrap"  >
        <img src="<?=base_url() ?>assets/loader9.svg" alt="">

             <!-- <div class="spinner spinner-7">
                    <div class="bounce1" style="background-color: green;"></div>
                    <div class="bounce2" style="background-color: yellow;"></div>
                    <div class="bounce3" style="background-color: red;"></div>
                  </div> -->
                </div>
    </div>
    
    <div id="main-wrapper">            
    <header class="topbar  " style=" background: linear-gradient(240deg, #2A2A72,#009FFD) !important;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark ">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i  style="font-size: 20px;
    padding-left: 10px;" class="ti-menu ti-close"></i></a>
                    
                     <a class="navbar-brand" href="<?php echo base_url();?>Login/Dashboard/" style="    display: none;"> 
                       
                            <label style="height:56px;width:200px;"><h3 style="padding-top: 10px; margin-top: 10px;"><b>
                                <center><?php echo $this->session->userdata('orgName');?></center> </b></h3></label>
                        
                    </a>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light displaynoneForMob" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                     <ul class="navbar-nav float-right">
                        
                        <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic displayNoneForDesktop" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 52px;
    line-height: 47px;
    text-decoration: none;
    border-bottom: none!important;">
                                <img src="<?php echo base_url(); ?>upload/1763800108.png" alt="user" class="rounded-circle" width="21"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="<?php echo base_url(); ?>upload/1763800108.png" alt="user" class="rounded-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0" style="color: black;"><?php echo $this->session->userdata('userName');?></h4>

                                         <p class=" mb-0"><?php echo $this->session->userdata('email');?></p>
                                    </div>
                                </div>
                                
                          
                       <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i>Setting</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>Login/logout"><i class="ti-settings m-r-5 m-l-5"></i>Logout  </a>

                     
                    
                            </div>
                        </li>
                </ul>
                  
                </div>
             
                <div class="navbar-collapse collapse" id="navbarSupportedContent" >
                    
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="#" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    
                    </ul>
                   
                    <ul class="navbar-nav float-right">
                       
                        <li class="nav-item dropdown">
                           
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <img src="<?php echo base_url().'upload/1763800108.png'?>" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="<?php echo base_url().'upload/1763800108.png'?>" alt="user" class="rounded-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0"><?php echo $this->session->userdata('userName');?></h4>
                                        <p class=" mb-0"><?php echo $this->session->userdata('email');?></p>
                                    </div>
                                </div>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url();?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                               
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header> 
        
     <aside class="left-sidebar">
          
            <div class="scroll-sidebar">
              
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav">
                         <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="<?php echo base_url();?>Login/Dashboard/" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\icon1.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Dashboard</span></a>
                            
                        </li>
                        <!--  <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="
                                  <?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>PurchaseorderIndex <?php }else{ ?><?php echo base_url(); ?>PurchaseorderCreate <?php } ?>" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\purchase1.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Purchase Order</span></a>
                            
                        </li> -->
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\sale.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Sales</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="
                                  <?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>InvoiceCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\invoice.png" width="21"><span style="padding-left: 5px;" class="hide-menu "> New Invoice </span></a></li>
                          <!--     <li class="sidebar-item"><a href="
                                  <?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>SalesreturnCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\invoice.png" width="21"><span style="padding-left: 5px;" class="hide-menu "> Sale Return </span></a></li> -->
<!--                                 <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CustomertransactionCreate<?php }else{ echo '#';} ?>" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\customer-transaction.png" width="21"><span style="padding-left: 5px;" class="hide-menu"> Customer Transaction </span></a></li>
 -->

 <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>InvoiceIndex<?php }else{ echo '#';} ?>" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\invoice.png" width="21"><span style="padding-left: 5px;" class="hide-menu"> Edit </span></a></li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item" style="display:none;"> <a class="sidebar-link  waves-effect waves-dark" href="#" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\purchase1.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Purchase</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>PurchasebillCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\purchasebill.png" width="21"><span style="padding-left: 5px;" class="hide-menu"> Purchase Bill </span></a></li>

                                <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>SuppliertransactionCreate<?php }else{ echo '#';} ?>" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\transaction.png" width="21"><span style="padding-left: 5px; "class="hide-menu"> Supplier Transaction </span></a></li>

                                
                                
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ProductCreate<?php }else{ echo '#';} ?>" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\product.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Product</span></a>
                            
                        </li>
                        <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/Barcode<?php }else{ echo '#';} ?>" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\transaction.png" width="21"><span style="padding-left: 5px;" class="hide-menu"> Barcode Creation </span></a></li>
                       
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="#" aria-expanded="false" id=""><img src="<?php echo base_url()?>assets3\images\user.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Users</span></a>
                            

                            <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>UserregistrationCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\userregistration.png" width="21"><span style="padding-left: 5px;" class="hide-menu">User Registration</span></a></li>


                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CustomerCreate<?php }else{ echo '#';} ?>" aria-expanded="false" id=""><img src="<?php echo base_url()?>assets3\images\user.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Customer</span></a>

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>SupplierCreate<?php }else{ echo '#';} ?>" aria-expanded="false" id=""><img src="<?php echo base_url()?>assets3\images\supplier.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Supplier</span></a>
                            
                             </li>

                             <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>EmployeeCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\employee.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Employee</span></a></li>
                                
                            </ul>

                        </li>
                        
                       <li class="sidebar-item mega-dropdown"> <a class="sidebar-link  waves-effect waves-dark" href="#" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\master.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Masters</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                 <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>UnitCreate<?php }else{ echo '#';} ?>
                                 " id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\unit.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Unit</span></a></li>

                                  <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/Shop/create<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\warehouse.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Shop</span></a></li>

                                <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>GstCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\gst.png" width="21"><span style="padding-left: 5px;" class="hide-menu">GST</span></a></li>

                                <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CategoryCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\category.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Category</span></a></li>

                                <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CountryCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\country.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Country</span></a></li>

                                

                                 <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>StateCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\state.png" width="21"><span style="padding-left: 5px;" class="hide-menu">State</span></a></li>

                                 <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>DistrictCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\city.png" width="21"><span style="padding-left: 5px;" class="hide-menu">District</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>TalukaCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\taluka.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Taluka</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>VillageCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\village.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Village</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>SubcategoryCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\subcategory.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Subcategory</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>HsnsacCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\hsn.png" width="21"><span style="padding-left: 5px;" class="hide-menu">HSN</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CompanyCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\company.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Company</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>BrandCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\brand.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Brand</span></a></li>

                                  <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ColorCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\color.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Color</span></a></li>

                                   <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ShapeCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\shape.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Shape</span></a></li>

                                   <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>SizeCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\size.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Size</span></a></li>

                                   <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ProductmaingroupCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\productmain.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Product Main Group</span></a></li>

                                   <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ProductgroupCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\product.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Product Group</span></a></li>
                                    
                                    <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ProductsubgroupCreate<?php }else{ echo '#';} ?>" id="productsubgrpload" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\productsub.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Product Sub Group</span></a></li>

                                    <li class="sidebar-item" style="display:none;"> <a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>WarehouseCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\warehouse.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Warehouse</span></a></li>


                               <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>ManufactureCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\userregistration.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Manufacture</span></a></li>

                                <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/Storage/create<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\warehouse.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Storage</span></a></li>

                                 <li class="sidebar-item" style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/Classification/create<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\subcategory.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Classification</span></a></li>
                                 
                                  <li class="sidebar-item"style="display:none;"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>MaterialCreate<?php }else{ echo '#';} ?>" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\product.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Material</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="#" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\report.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\reportcard.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Supplier</span></a>

                                    <ul aria-expanded="false" class="collapse second-level" id="abc" style="left: -220px;">
                                        
                                        <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>supplierPayment<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Supplier Payment</span></a></li>
                                       
                                    </ul>


                                </li>
                                
                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\reportcard.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Customer </span></a>
                                    <ul aria-expanded="false" class="collapse second-level" id="abc" style="left: -220px;">
                                        
                                        <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>CustomerPayment<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Customer Payment</span></a></li>
                                        
                                    </ul>


                                </li>

                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\reportcard.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Purchase Reports</span></a>

                                    <ul aria-expanded="false" class="collapse second-level" id="abc" style="left: -220px;">
                                        
                                        <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Purchasesummary<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Purchase Summary</span></a></li>
                                        
                                    </ul>


                                </li>

                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\reportcard.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Sales Reports</span></a>

                                     <ul aria-expanded="false" class="collapse second-level" id="abc" style="left: -220px;">
                                        
                                        <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Salesummary<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Sales Summary</span></a></li>
                                        
                                    </ul>

                                </li>


                                <li class="sidebar-item dropdown-submenu pull-left"><a href="#" id="" class="sidebar-link"><img src="<?php echo base_url()?>assets3\images\reportcard.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Product Reports</span></a>

                                    <ul aria-expanded="false" class="collapse second-level" id="abc" style="left: -220px;">
                                        
                                        <!-- <li class="sidebar-item "><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Productsummary<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Product Summary</span></a></li> -->
                                         <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/ProductList<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Product List</span></a></li>

                                        <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Productsummary<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Product Stock</span></a></li>

                                       
                                        
                                          <!-- <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Contentsearch<?php }else{ echo '#';} ?> " class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Content Search</span></a></li> -->
                                          
                                         <!--  <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>Productsearch<?php }else{ echo '#';} ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Product Search</span></a></li> -->
                                    
                                     
                                        <!-- <li class="sidebar-item"><a href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo base_url();?>admin/Profitloss<?php }else{ echo '#';} ?> " class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu">Profit Loss</span></a></li> -->
                                        
                                    </ul>
                                </li>
     <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php if($this->session->userdata('u_id')==1){  ?><?php echo '#'; ?><?php }else{ echo '#';} ?>" aria-expanded="false" id=""><img src="<?php echo base_url()?>assets3\images\whatsapp.png" width="21"><span style="padding-left: 5px;" class="hide-menu">WhatsApp</span></a>
                            
                        </li>
                            </ul>
                            
                        </li>

                        

                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="#" aria-expanded="false"><img src="<?php echo base_url()?>assets3\images\settings.png" width="21"><span style="padding-left: 5px;" class="hide-menu">Setting & help</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link" onclick="javascript:window.open('http://ostermiller.org/calc/calculator.html','calculator'+new Date().getTime(),'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,copyhistory=no,width=450,height=300');"><img src="<?php echo base_url()?>assets3\images\Calculator.png" width="25" ><span style="padding-left: 5px;" class="hide-menu"> Calculator</span></a></li>

                                <li class="sidebar-item"><a href="#" id="" class="sidebar-link" onclick="notepad();"><img src="<?php echo base_url()?>assets3\images\notepad.png" width="21" ><span style="padding-left: 5px;" class="hide-menu"> Notepad</span></a>
                                </li>

                                <li class="sidebar-item"><a href="<?php echo base_url();?>Companyinfo" id="" class="sidebar-link" ><img src="<?php echo base_url()?>assets3\images\company1.png" width="25" ><span style="padding-left: 5px;" class="hide-menu"> Company Info</span></a>
                                </li>

                                 <li class="sidebar-item"><a href="<?php echo base_url();?>admin/Backup/backup_database" id="" class="sidebar-link" ><img src="<?php echo base_url()?>assets3\images\database.jpg" width="25" ><span style="padding-left: 5px;" class="hide-menu"> Backup</span></a>
                                </li>
                            </ul>
                        </li>
                        
                                
                            </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
           

<script type="text/javascript">
    function launchCalc()
{
 // var WshShell = new ActiveXObject("WScript.Shell");
 // WshShell.Run("calc.exe");
 // alert('hoo');
}

function notepad()
{
    // MyObject = new ActiveXObject( "WScript.Shell" )  

    var url="https://www.rapidtables.com/tools/notepad.html";
    window.open(url,'popUpWindow','height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');



    //  MyObject.Run("file:///C:/Windows/notepad.exe"); 

     // WshShell = new ActiveXObject("WScript.Shell");
     //    WshShell.Run("file:///C:/Windows/notepad.exe", 1, false);
    
}


</script>