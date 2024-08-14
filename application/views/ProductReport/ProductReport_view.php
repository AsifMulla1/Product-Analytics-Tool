
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>



@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @media only screen and (max-width: 320px) {
  .btnn{
    top: 95px;
    margin-left: -35px;
  }
  /* .main_heading{
    display:none;
  } */
  .card-body {
    flex: 1 1 auto;
    padding: 10px!important;
    margin-top: 50px;
}

  
}

 @media (max-width: 768px){

.card-body {
    flex: 1 1 auto;
    padding: 3.25rem;
}
.container {
    padding-right: 0px;
    padding-left:0px;
}

}

/* ***************  my new style********* */
label{
    font-family: "poppins"!important;
}
.form-control {
    font-size: 14px;
    border: 1px solid rgb(0 0 0 / 48%);
    font-family: 'Poppins';
    border-radius: 0.25rem !important;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #495057 !important;
    font-family: 'Poppins' !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #e5e5e5;
    margin-top: 1px;
    height: 31px;
}
.select2-container .select2-selection--single {
    box-sizing: border-box!important;
    cursor: pointer!important;
    display: block!important;
    height: 35px!important;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default .select2-selection--single {
    border: 1px solid rgb(0 0 0 / 48%) !important;
}
.search{
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px!important;
    background-color: black!important;
    border: none!important;
    margin-top: 31px!important;
    border-radius: 5px!important;
    padding: 4px 15px!important;
    font-size: 17px!important;
    font-family: 'Poppins';
    margin-left: 0px!important;
}
.table-bordered, .table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6!important;
}
.table thead {
    border-bottom: 1px solid #dee2e6!important;
    border-top: 1px solid #dee2e6!important;
    font-family: 'Poppins'!important;
}
.table  td{
    font-family: 'Poppins'!important;
    font-weight: 500;
    padding: 6px 5px!important;
    font-size: 17px;
    border-right: 1px solid #dee2e6;

   
}
.table th{
    font-family: 'Poppins'!important;
    font-weight: 500;
    padding: 6px 5px!important;
    font-size: 17px;
    background: #8150d1eb!important;
    color: white!important;
    border-right: 1px solid #dee2e6;
}
.table.dataTable{
    border-bottom: 1px solid #dee2e6!important;
}
div.dataTables_wrapper div.dataTables_info {
    font-family: 'Poppins'!important;

}
.selectedpro{
    font-family: 'Poppins'!important;
    font-size:21px;

}
.table{
    border-left: 1px solid #dee2e6 !important;

}
#Storedata th{
    background: #8150d1eb!important;
    color: white!important;
}
#Storedata th:nth-child(3) {
  width:23%!important;
}
.page-item.disabled .page-link{
    font-family: 'Poppins'!important;

}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #8a5dd4!important;
    border-color: #8a5dd4!important;
}
.page-link{
    font-family: 'Poppins'!important;

}
 .search:hover{
    transition:0.6s;
    background:#8150d1eb!important;
 } 
 .search:active{
    transition:0.6s;
    background:#8150d1eb!important;
    transform: translateY(5px);
 }   

</style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column" style="padding: 0.75rem 14px 0;">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
               
                
                <!-- <div class="separator-breadcrumb border-top"></div> -->
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="card ">
                            <!-- <div class="breadcrumb " >
                            </div> -->
                            <div class="card-body pt-2">

                            <h1 class="text-center" style="    font-family: 'Poppins';    font-size: 30px;">Product Report</h1>

                         <hr style="border-top: 2px solid #8a5dd4;">
                            <div class="row mt-4">
                                    <div class="col-md-2 form-group">
                                        <label for="">Product Name</label>
                                            <select class="select2 form-control mt-1 dropdown" id="productName" 
                                                name="" style="width: 100%;">
                                                <option value="0">Select Name</option>
                                                        <?php

                                                            foreach ($productnamereport as $key => $value) {
                                                            $selected="";
                                                        
                                                            echo '<option value="'.$value->productId.'"'.$selected.' >'.$value->productId.'  '.$value->productName.'</option>';

                                                            }
                                                            ?>
                                                </select>
                                        </div>


                                        <div class="col-md-2 form-group">
                                            <label for="">Product Type</label>
                                            <select class="select2 form-control mt-1 dropdown" id="categoryName" 
                                                 style="width: 100%;">
                                                <option value="0">Select Type</option>
                                                <?php

                                                    foreach ($producttypereport as $key => $value) {
                                                    $selected="";
                                                        
                                                    echo '<option value="'.$value->categoryId.'"'.$selected.' >'.$value->categoryId.'  '.$value->categoryName.'</option>';

                                                    }
                                                ?>
                                                </select>

                                        </div>


                                        <div class="col-md-2 form-group">
                                            <label for="">Company</label>
                                            <select class="select2 form-control mt-1 dropdown" id="companyName" 
                                                 style="width: 100%;">
                                                <option value="0">Select Company</option>
                                                 <?php

                                                    foreach ($companyreport as $key => $value) {
                                                    $selected="";
                                                        
                                                    echo '<option value="'.$value->companyId.'"'.$selected.' >'.$value->companyId.'  '.$value->companyName.'</option>';

                                                    }
                                                ?>
                                                </select>

                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="">ProductCode</label>
                                            <select class="select2 form-control mt-1 dropdown" id="productcode" 
                                                 style="width: 100%;">
                                                <option value="0">Select Code</option>
                                                 <?php foreach ($Codereport as $key => $value) {
                                                    $selected="";
                                                        
                                                    echo '<option value="'.$value->productcode.'"'.$selected.' >'.$value->productcode.'</option>';

                                                    }
                                                ?>
                                                </select>

                                        </div>

                                        <div class="col-md-4 form-group">
                                            <button class="btn btn-primary search" type="button"  id="searchbutton"  style="margin-right: 7px;">Search</button>
                                            <button class="btn btn-primary search" type="button"  id="selectbutton" style="margin-right: 7px;">Select All</button>
                                            <button class="btn btn-primary search" type="button"  id="submitbutton"  >Submit</button>
                                            
                                   
                                        </div>

       
                                      
                              </div>
                              
                                  
                          
                              <!-- <div class="container-fluid"> -->
                 <div class="statement_table checkout_dt" style="margin-top:5px!important;padding:10px 2px!important"  id="detialview">

                    <div class="statement_body">
                        <div id="maintable">

                            
                            <div class="table-responsive-md" style="overflow-y:hidden!important;">

                                <table class="display table-bordered table no-footer mt-3 text-center" >
                                    <thead>
                                            <tr>
                                            <th>select</th>
                                                <th>ProductId</th>
                                                <th>ProductCode</th>
                                                <th>Photo</th>
                                                <th>ProductName</th>
                                                <th>ProductType</th>
                                                <th>Company</th>
                                                
                                                
                                             </tr>
                                    </thead>
                                    
                                    <tbody id="tabledata"> </tbody>

                                </table>														
                            </div>
                            </div>
                            </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12 text-right">
                                   <button  type="button" onClick="deleteMarkedRows();" class=" btn btn-danger btn-sm">Delete All</button>
                                </div>
                                 
                            </div>
                             <!-- Selected Product Table -->
                            <!-- <div class="container-fluid mt-5"> -->
                                <!-- <h2 class="selectedpro"><i class="fas fa-shopping-basket"></i>Selected Products&nbsp;</h2> -->
                                <div class="table-responsive">
                                    <table id="selectedTable" class="display table" style="width:100%;">
                                     <thead>
                                       <tr>
                                        <th>Delete</th>
                                         <th>Id</th>
                                         <th>Photo</th>
                                         <th>PCode</th>
                                         <th>ProductName</th>
                                         <th>ProductType</th>
                                         <th>Company</th>
                                         <th>Remove</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                     <!-- Selected products will be displayed here -->
                                     </tbody>
                                   </table>
                                <!-- </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <img src="<?php echo base_url(); ?>assets/loader9.svg" alt="" id="loadershow" class="shadow bg-white"  style="position:absolute;top:65%;right:47%;bottom:0;border-radius:50%">

            </div>
        </div>
    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
<script src="assets3/DataTables/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> 



<script>
	$(document).ready(function() {
    $('#example').dataTable( {} ); 
} );


/***************start Function to delete all checkbox marked rows ******************/
function deleteMarkedRows() {
    $('.select-checkbox:checked').each(function() {
        var productId = $(this).val();
        $('#productrow' + productId).remove();
        $('#Storedata').find('#checkbocx'+ productId).prop('checked', false); 
    });
}
/*************** end Function to delete all checkbox marked rows ***************/


/***************start only row remove with remove btn 1 ******************/
function removerow(id){
 
    $('#productrow'+id).remove(); 
    $('#checkbocx'+id).val(0);
    $('#checkbocx'+id).prop('checked', false);
                                         
}
/*************** end only row remove with remove btn 1 ******************/


  $(document).ready(function(){
    // Hide loadershow element and show detialview element when the document is ready
    $('#loadershow').hide();
    $('#detialview').show();

    
    var selectedRowsData = [];

    
    $("#searchbutton").click(function(){
        
        let productName = $('#productName').val();
        let categoryName = $('#categoryName').val();
        let companyName = $('#companyName').val();
        let productcode = $('#productcode').val();
        
        
        $.ajax({
            url: "<?php echo base_url();?>ProductReport/GetData",
            method: "POST",
            data: {
                'productName': productName,
                'categoryName': categoryName,
                'companyName': companyName,
                'productcode': productcode,
            },

            beforeSend: function(){
                $('#loadershow').hide();
                
            },

            success: function(res){
                setTimeout(() => {
                    $('#loadershow').hide();
                }, "1000");

               
                $('#maintable').show(); 
                $('#Storedata').empty(); 
                $('#maintable').empty(); 

                
                $('#maintable').append('<div class="table-responsive-md" id="tabls" style="border-collapse: collapse;"><table id="Storedata" class="display table  mt-3"> </table> </div>');

                // Load DataTables plugin
                $.getScript('<?=base_url() ?>assets3/DataTables/datatables.min.js');

                // Parse JSON response
                var data = JSON.parse(res);

                // Check if data is not empty
                if (data != '') {
                    var dataSet6 = [];

                    
                    for (var i = 0; i < data.length; i++) {
                      var id = data[i]['Id'];
                      var companyName = data[i]['companyName'];
                      var categoryName = data[i]['categoryName']; // Added categoryName variable

                    // Replace null company names with '   '
                    if (companyName === null) {
                        companyName = '   ';
                    }

                    // Replace null category names with '   '
                    if (categoryName === null) {
                       categoryName = '   ';
                    }

                    dataSet6[i] = [
                        '<div class="pd" style="padding: 39px 0px;"><input type="checkbox" id="checkbocx'+data[i]['productId']+'" class="select-checkbox" style="font-size:22px:font-weight:700;height:17px;width:18px;" value="0" ></div>', // Add checkbox to each row
                        '<div class="pd" style="padding: 39px 0px;">' + data[i]['productId'] + '</div>',
                        '<div class="pd cont-checkbox" style="position: relative; width: 100%; height: 100px;">' +
                               '<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(\'background-image-url.jpg\'); background-size: cover;border-radius: 5px;border: 1px solid #dee2e6;"></div>' +
                               '<img src="<?php echo base_url();?>upload/' + data[i]['photo'] + '" alt="' + data[i]['productName'] + '" style="width: 187px; height: 100%;">' +
                            '</div>',  
                        '<div class="pd" style="padding: 39px 0px;">' + data[i]['productcode'] + '</div>',
                        '<div class="pd" style="padding: 34px 0px;">' + data[i]['productName'] + '</div>',
                        '<div class="pd" style="padding: 34px 0px;">' + categoryName + '</div>', // Used categoryName variable
                        '<div class="pd" style="padding: 34px 0px;">' + companyName + '</div>',
                        

                    ];
                }

                
                    // Initialize DataTable with dataSet6
                    var tableOne = $('#Storedata').DataTable({
                        data: dataSet6,
                        columns: [
                            { title: "Select", orderable: false },
                            { title: "Id" },
                            { title: "Photo" },
                            { title: "PCode" },
                            { title: "ProductName" },
                            { title: "ProductType" },
                            { title: "Company" }
                            
                        ],
                        columnDefs: [
                            { className: "text-center", targets: "_all" } 
                        ],
                        // "bPaginate": false        // For pagination remove
                    });

                    // Add event listener for row clicks to toggle checkbox
                    $('#Storedata tbody').on('click', 'tr', function () {

                        var checkbox = $(this).find('.select-checkbox');

                        checkbox.prop("checked", !checkbox.prop("checked")).change();
                    });

                    $('tr input[type="checkbox"]').click(function(event){
                        event.stopPropagation();
                    });

                    
                    

                    /************** Select All button click event **************/
                    $("#selectbutton").click(function() {
                    
                        var isChecked = $(this).is(":checked");
                        $(".select-checkbox").prop("checked", !isChecked);

                        if (isChecked) {
                           selectedRowsData = [];
                           $('#selectedTable tbody').empty();
                        } 
                        else {
                           $('#Storedata tbody tr:visible').each(function() {
                                     
                            var rowData = tableOne.row($(this)).data();
                            if (selectedRowsData.indexOf(rowData) === -1) {
                               appendSelectedRow(rowData);
                            } 
                           });
                           
                   
                        }
                    });
                    

                    
                    /// Add change event listener for checkboxes
                    $('#Storedata tbody').on('change', '.select-checkbox', function () {
                      var isChecked = $(this).is(":checked");
                      var rowData = tableOne.row($(this).closest('tr')).data();
                      if (isChecked) {
                         appendSelectedRow(rowData);
                    
                         
                     } else {
                      removeSelectedRow(rowData);
                     }

                    }); 
                    

                } else {
                    
                    $('#Storedata').empty();
                    Swal.fire({
                        title: 'No Record found!',
                        text: '',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 500,
                        width: '400px'
                    });
                }
            },
            error: function(xhr, status, error) {
                
            }
        });
    });

// Function to append selected row to the detail table
function appendSelectedRow(rowData) {
    selectedRowsData.push(rowData);

    var productId = extractProductId(rowData[1]);
    var checkboxId = 'checkbox_' + productId;

    $('#selectedTable tbody').append('<tr class="checkrow" id="productrow' + productId + '">' +
        '<td style="text-align: center;"><input type="checkbox" id="' + checkboxId + '" class="select-checkbox bordercheck" value="' + productId + '"  style="font-size:22px:font-weight:700;height:17px;width:18px;accent-color: red;"></td>' + // Add checkbox with unique ID
        '<td style="text-align: center;"><input type="hidden" name="FkProductId[]" value="' + productId + '">' + productId + '</td>' +
        '<td style="text-align: center;">' + rowData[2] + '</td>' +
        '<td style="text-align: center;">' + rowData[3] + '</td>' +
        '<td style="text-align: center;">' + rowData[4] + '</td>' +
        '<td style="text-align: center;">' + rowData[5] + '</td>' +
        '<td style="text-align: center;">' + rowData[6] + '</td>' +
        '<td style="text-align: center;"><button style="margin-left:0px;" type="button" onClick="removerow(' + productId + ');" class="btn btn-danger btn-sm">Remove</button></td>' + // Only Add remove btn 2
        '</tr>');
        

    // start row select with checkbox check 2nd tbl
    $('#productrow' + productId).click(function() {
        $('#' + checkboxId).prop('checked', function(i, val) {
            return !val;
        });
    });
    
    //  start select checkbox check 2nd tbl
    $('#productrow' + productId + ' input[type="checkbox"]').click(function(event) {
       event.stopPropagation();
    });

}

/********************* Start Remove HTML tags from the string *************/
function extractProductId(htmlString) {
    var productId = htmlString.replace(/<\/?[^>]+(>|$)/g, "");
    return productId;
}
/********************* Start Remove HTML tags from the string ************/

    
/***************start only row remove with remove btn 3 ******************/
function removeSelectedRow(rowData) {
       
    $('#productrow'+extractProductId(rowData[1])).remove(); 
                
 }
 /***************end only row remove with remove btn 3 ******************/

/***************Start Function to remove selected row from the detail table ******************/
// function removeSelectedRow(rowData) {
//     var index = selectedRowsData.findIndex(function(row) {
//         return row[1] === rowData[1];
//     });
//     selectedRowsData.splice(index, 1);
    
    
//     $('#selectedTable tbody').empty();
    
//     selectedRowsData.forEach(function(row) {
//         var productId = extractProductId(row[1]);
//         var checkboxId = 'checkbox_' + productId;

//         $('#selectedTable tbody').append('<tr class="checkrow" id="productrow' + productId + '">' +
//             '<td style="text-align: center;"><input type="checkbox" id="' + checkboxId + '" class="select-checkbox bordercheck" value="' + productId + '"  style="font-size:22px:font-weight:700;height:17px;width:18px;accent-color: red;"></td>' +
//             '<td style="text-align: center;"><input type="hidden" name="FkProductId[]" value="' + productId + '">' + productId + '</td>' +
//             '<td style="text-align: center;">' + row[2] + '</td>' +
//             '<td style="text-align: center;">' + row[3] + '</td>' +
//             '<td style="text-align: center;">' + row[4] + '</td>' +
//             '<td style="text-align: center;">' + row[5] + '</td>' +
//             '<td style="text-align: center;">' + row[6] + '</td>' +
//             '<td style="text-align: center;"><button style="margin-left:0px;" type="button" onClick="removerow(' + productId + ');" class="btn btn-danger btn-sm">Remove</button></td>' +
//             '</tr>');

//     });
    
// }

/***************End Function to remove selected row from the detail table ******************/


   /******************Start For Dropdown refferesh*********************/
   $('#productName').change(function() {
        
        $("#categoryName").val('0').trigger('change.select2');
        $("#companyName").val('0').trigger('change.select2');
        $("#productcode").val('0').trigger('change.select2');
     });
 
     $('#categoryName').change(function() {
        $("#productName").val('0').trigger('change.select2');
        $("#companyName").val('0').trigger('change.select2');
        $("#productcode").val('0').trigger('change.select2');
     });
 
     $('#companyName').change(function() {
        $("#productName").val('0').trigger('change.select2');
        $("#categoryName").val('0').trigger('change.select2');
        $("#productcode").val('0').trigger('change.select2');
     });
 
      $('#productcode').change(function() {
        $("#productName").val('0').trigger('change.select2');
        $("#categoryName").val('0').trigger('change.select2');
        $("#companyName").val('0').trigger('change.select2');
     });
 
 });
 /****************** End For Dropdown refferesh *********************/
  

 /****************** Start After Submit btn click nextpage show id with (data) *********************/
 $(document).ready(function(){
       $("#submitbutton").click(function(){
         // var serializedTableData = $('#selectedTable').html();
         var serializedTableData = $("input[name='FkProductId[]']").map(function(){return $(this).val();}).get();
         console.log(serializedTableData);
 
         localStorage.setItem('serializedTableData', serializedTableData);
         window.location.href = base_path+'/PurchaseorderCreate';
         });
     });
 /****************** End After Submit btn click nextpage show id with (data) *********************/
 </script>





                       
               
            





                       
               
            