<?php
session_start();

require "../classes/Product.php";

$product_obj = new Product;
$product = $product_obj-> getProduct($_SESSION['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light mx-auto">
        <div class="container">
            <a href="dashboard.php" class="text-dark"><i class="fa-solid fa-house"></i></a>
            <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
            </form>           
        </div>
    </nav>

    <main class="row justify-content-center ">
        <h2 class="display-4 text-center my-4 text-warning fw-bold"><i class="far fa-edit me-1"></i>Edit Product</h2>
        <div class="col-4">
            <form action="../actions/edit-product.php" method="post">
                <div class="mb-2">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" 
                    value="<?= $product['product_name']?>" max="50" required autofocus>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" class="form-control" value="<?= $product['price']?>" step="any" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity']?>" min="1" required>
                        </div>
                    </div>
                </div>

                <button type="submit" name="btn_update" class="btn btn-warning mb-4 w-100">Edit</button>
            </form>
        </div>
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>