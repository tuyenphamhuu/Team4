
<?php require 'app/views/partials/head.php'; ?>
<?php require 'app/views/partials/head-admin.php'; ?>
<?php require 'core/function.php'; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-8">
            <a class="btn btn-primary" href="/admin/addProduct" role="button">Add product</a>
            <table class="table table-responsive">
                <thead class="thead-inverse">
                    <tr>
                    <th>STT</th>
                    <th>Product Name</th>
                    <th>New Price</th>
                    <th>Old Price</th>
                    <th>Color</th>
                    <th>Config</th>
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
                    <td><?php echo $product->ProductName; ?></td>
                    <td><?php echo $product->NewPrice; ?></td>
                    <td><?php echo $product->OldPrice; ?></td>
                    <td><?php echo $product->ColorProduct; ?></td>
                    <td><?php echo the_excerpt($product->Config); ?></td>
                    <td><button type="button" class="btn btn-outline-dark">edit</button>
</td>
                    <td><button type="button" class="btn btn-outline-danger">del</button>
</td>
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