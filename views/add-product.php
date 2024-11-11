<?php

require "../classes/Product.php";

$product_obj = new Product;
$all_products = $product_obj -> getAllProducts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main class="row justify-content-center ">
        <h2 class="display-4 text-center my-4 text-info fw-bold"><i class="fa-solid fa-box"></i>Add Product</h2>
        <div class="col-4">
            <form action="../actions/add-product.php" method="post">
                <div class="mb-2">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" max="50" required auto>
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
                            <input type="number" name="quantity" id="quantity" class="form-control"  min="1" required>
                        </div>
                    </div>
                </div>

                <button type="submit" name="btn_add" class="btn btn-info mb-4 w-100" data-bs-dismiss="modal">Add</button>
            </form>
        </div>
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>