
<?php require 'app/views/partials/head-admin.php'; ?>
<br>
<div class="container-fluid edit-products ">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-8">
            <form id="form-func" action="/editProduct" method="POST"  enctype="multipart/form-data">
            <input name="ID_Product" type="text" value="<?php echo $product[0]->ID_Product;?>" hidden="hidden">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Product name</label>
                    </div>
                    <div class="col-md-9">
                        <input name="ProductName" value="<?php echo $product[0]->ProductName;?>" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">New Price</label>
                    </div>
                    <div class="col-md-9">
                        <input name="NewPrice" value="<?php echo $product[0]->NewPrice;?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Price">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Old Price</label>
                    </div>
                    <div class="col-md-9">
                        <input name="OldPrice" value="<?php echo $product[0]->OldPrice;?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Old Price">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Config</label>
                    </div>
                    
                    <div class="col-md-9">
                        <textarea  name="Config" id="Config" rows="5" cols="100"><?php echo $product[0]->Config;?>
                        </textarea>
                    </div><script>CKEDITOR.replace('Config');</script>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Description</label>
                    </div>
                    
                    <div class="col-md-9">
                    <textarea  name="description" id="description" rows="5" cols="100"><?php echo $product[0]->description;?>
                    </textarea>
                    </div><script>CKEDITOR.replace('description');</script>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Image</label>
                    </div>
                    <div class="col-md-9">
                    <img style="width: 150px;" src="/public/images/<?php echo $product[0]->Image; ?>" class="img-fluid" ><br><br>
                    <input name="Image" type="file" class="form-control-file" id="exampleFormControlFile1"></div>
                </div>
                 <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>