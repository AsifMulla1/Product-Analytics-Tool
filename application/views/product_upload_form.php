<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Products</title>
</head>
<body>
<form action="<?php echo base_url('Product_upload/import'); ?>" method="post" enctype="multipart/form-data">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="Verify">
                <input type="submit" class="btn btn-primary" name="importSubmit" value="SAVE">
             
            </form>
</body>
</html>
