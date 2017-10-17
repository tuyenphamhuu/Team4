
<?php require 'app/views/partials/head-admin.php'; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-8">
            <form id="form-func" action="/addProduct" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Product name</label>
                    </div>
                    <div class="col-md-9">
                        <input name="ProductName" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">New Price</label>
                    </div>
                    <div class="col-md-9">
                        <input name="NewPrice" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Price">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Old Price</label>
                    </div>
                    <div class="col-md-9">
                        <input name="OldPrice" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Old Price">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">ID_Type Product</label>
                    </div>
                    <div class="col-md-9">
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID_Type Product">
                    </div>
                </div> -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Color Product</label>
                    </div>
                    <div class="col-md-9">
                        <input name="ColorProduct" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Color Product">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Config</label>
                    </div>
                    <div class="col-md-9">
                        <input name="Config" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Config">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Description</label>
                    </div>
                    <div class="col-md-9">
                        <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Image</label>
                    </div>
                    <div class="col-md-9">
                    <input name="Image" type="file" class="form-control-file" id="exampleFormControlFile1">                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>