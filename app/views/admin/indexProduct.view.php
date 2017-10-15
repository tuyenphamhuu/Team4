
<?php require 'app/views/partials/head-admin.php'; ?>
<?php require 'core/function.php'; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-9 col-12">
            <a class="btn btn-primary" href="/admin/addProduct" role="button">Add product</a>
            <table class="table table-responsive">
                <thead class="thead-inverse">
                    <tr>
                    <th>STT</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>New Price</th>
                    <th>Old Price</th>
                    <th>Color</th>
                    <!-- <th>Config</th> -->
                    <th>Edit</th>
                    <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $stt =1;
                    foreach ($products as $product) {
                        ?>
                    <tr>
                    <th scope="row"><?php echo $stt; ?></th>
                    <td><img style="width: 150px;" src="/public/images/<?php 
                    if ($product->Image != ''){
                        echo $product->Image;
                    }
                    else{
                        echo 'knowledge_graph_logo.png';
                    }
                    
                    ?>" class="img-fluid" ></td>
                    <td><?php echo $product->ProductName; ?></td>
                    <td><?php echo $product->NewPrice; ?></td>
                    <td><?php echo $product->OldPrice; ?></td>
                    <td><?php echo $product->ColorProduct; ?></td>
                    <!-- <td> <?php //echo the_excerpt($product->Config); ?></td> -->
                    <td><a class="btn btn-dark" href="editProduct?id=<?php echo $product->ID_Product; ?>" role="button">edit</a></td>
                    <td><a class="btn btn-warning" href="delProduct?id=<?php echo $product->ID_Product; ?>" role="button">del</a></td>
                    </tr>
                    <?php
                        $stt++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>