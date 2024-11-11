<?php

session_start();

require "../classes/Product.php";


$product_obj = new Product;
$all_products = $product_obj -> getAllProducts();

// $product -> storeProduct($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light" style="margin-bottom:80px">
        <div class="container">
            <a href="dashboard.php" class="text-dark"><i class="fa-solid fa-house"></i></a>
            <span class="navbar-text">Welcome,<?= $_SESSION['username']?></span>
            <form action="../actions/logout.php" method="post">
                <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
            </form>           
        </div>
    </nav>
    
   
<main class="container">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold">Products List</h2>
        </div>
        <div class="col text-end">
            <a href="add-product.php" class="text-primary"><i class="fa-solid fa-plus"></i></a>
            
        </div>
        
        
    </div>
   

    <table class="table table-hover alighn-middle border">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($product = $all_products->fetch_assoc()){
            ?>
            <tr>
                <td><?= $product['id']?></td>
                <td><?= $product['product_name']?></td>
                <td><?= $product['price']?></td>
                <td><?= $product['quantity']?></td>
                <td>
                    <a href="edit-product.php" class="btn btn-warning" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                    <a href="../actions/delete-product.php" class="btn btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                </td>
                <td>
                    <?php
                    if($product['quantity']>= 1){
                    ?>
                    <a href="buy-product.php" class="btn btn-success" title="Buy"><i class="fa-solid fa-cash-register"></i></a>

                    <?php
                    }
                    ?>          
                </td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

 <!-- Add Product (Modal) -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <button type="button" class="btn-close small text-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            
                    <div class="row justify-content-center">
                        <div class="col-6">
                        <h1 class="text-center text-info"><i class="fa-solid fa-box"></i>Add Product</h1>
                        <form action="" method="post" class="mx-auto">
                            <div class="mb-2">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" name="" id="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-text">$</div>
                                            <input type="number" name="price" id="price" class="form-control" step="any" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="btn_add" class="btn btn-info mb-4 w-100" data-bs-dismiss="modal">Add</button>
                        </form>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div> -->