<?php require 'app/views/partials/head.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>

        <div class="right col-lg-10 col-md-10 col-sm-10">

            <div class="container">
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
                    <td><?php echo $product->Config; ?></td>
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
</div>