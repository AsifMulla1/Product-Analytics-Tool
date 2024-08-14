<style>
@media only screen and (max-width: 320px) {
    .btnn {
        top: 95px;
        margin-left: -35px;
    }

    /* .main_heading{
    display:none;
  } */
    .card-body {
        flex: 1 1 auto;
        padding: 10px !important;
        margin-top: 50px;
    }


}

@media (max-width: 768px) {

    .card-body {
        flex: 1 1 auto;
        padding: 3.25rem;
    }

    .container {
        padding-right: 0px;
        padding-left: 0px;
    }

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
                    <div class="breadcrumb ">
                        <h1 style="font-family: 'Work Sans', sans-serif;">Next</h1>
                    </div>
                    <div class="card-body">
                        <form action="next_page.php" method="post" id="myForm">
                            <input type="text" id="DemoID">
                    </div>
                    <div class="table-responsive">

                        <table class="display table table-bordered mt-2" id="example" style="width:100%"
                            id="item_table">
                            <thead class="table-head-style">
                                <tr>
                                    <th>ProdId</th>
                                    <th>ProdNM</th>
                                    <th>Qty</th>
                                    <th>purchaseRate</th>
                                    <th>salesRate</th>
                                    <th>Gst</th>
                                    <th>gstRate</th>
                                    <th>Amt</th>
                                </tr>
                            </thead>
                            <tbody id="itembody">
                                  
                            </tbody>

                        </table>
                    </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
<script src="assets3/DataTables/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
    var abc = localStorage.getItem('serializedTableData');
    console.log(abc);

    var id = document.getElementById("DemoID").value = abc;

    $.ajax({
        url: '<?php echo base_url('NextPage/GetData'); ?>',
        method: "POST",
        data: {
            'DemoID': id
        },
        success: function(response) {
            console.log(response); 

            $('#itembody').empty();

            $.each(response, function(index, row) {
                var newRow = '<tr>' +   
                    '<td>' + row.productId + '</td>' +
                    '<td>' + row.productName + '</td>' +
                    '<td>' + row.Qty + '</td>' +
                    '<td>' + row.purchaseRate + '</td>' +
                    '<td>' + row.salesRate + '</td>' +
                    '<td>' + row.Gst + '</td>' +
                    '<td>' + row.gstRate + '</td>' +
                    '<td>' + row.Amt + '</td>' +
                    '</tr>';

                $('#itembody').append(newRow);
            });
        },
        
    });

    $('#example').dataTable({});
});

</script>