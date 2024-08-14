<!DOCTYPE html>
<html lang="en" dir="ltr">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets3/images/inventory.png">
    <title><?php echo $this->session->userdata('orgName');?></title>     
    <!-- Custom CSS -->  
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets3/libs/select2/dist/css/select2.min.css">    
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link href="<?php echo base_url(); ?>dist/css/style.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>web_resources/dist/css/AdminLTE.min.css" rel="stylesheet">
     
        <link href="<?php echo base_url(); ?>assets3/DataTables/datatables.css" rel="stylesheet">        
      
        <link rel="stylesheet" href="<?php echo base_url();?>web_resources/dist/css/custom/parsley.css">
        <link rel="stylesheet" href="<?php echo base_url();?>web_resources/dist/css/sweetalert.css">
      <!--   <link href="<?php echo base_url(); ?>dist/css/steps.css" rel="stylesheet"> -->
     <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
     <script>
        var base_path="<?php echo base_url();?>";
     </script>


</head>
<style type="text/css">
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
div#main-wrapper{
  /* background: linear-gradient(45deg, #8152cc, transparent) !important; */
  background-image:url('assets/login-bg.jpg')!important;
  background-repeat:no-repeat!important;
  background-position:center!important;
  background-size:cover!important;
  height: 100vh;
}
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
    <header class="topbar" style="display: none;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                     <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    </a>
                  
                     <a class="navbar-brand" href="">
                       
                           
                    </a>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    </a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="#" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        
                    </ul>
                  
                    <ul class="navbar-nav float-right">
                        
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle text-muted waves-dark"></div>
                            
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        

 



