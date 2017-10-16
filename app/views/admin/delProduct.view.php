<?php require 'app/views/partials/head-admin.php'; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
    
        <div class="right col-lg-10 col-md-10 col-sm-8">
            <form action="/delProduct" method="POST">
                <div class="form-group">
                    <input type="text" name="ID_Product" hidden="hidden" value="<?php echo $product[0]->ID_Product; ?>">
                    <label > <h2><b>Do you want to delete product " <?php echo $product[0]->ProductName; ?> " ?</b></h2></label>
                </div>
                <button type="submit" class="btn btn-danger">YES</button>
                <a class="btn btn-primary" href="indexProduct" role="button">Cancer</a>
            </form>
        </div>
    </div>
</div>