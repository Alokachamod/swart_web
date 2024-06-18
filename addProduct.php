<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Add New Product</h2>
        <form id="productForm">
            <div class="form-group">
                <label for="productTitle">Product Title</label>
                <input type="text" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea class="form-control" id="productDescription" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" id="productPrice" required>
            </div>
            <div class="form-group">
                <label for="productQty">Product Quantity</label>
                <input type="number" class="form-control" id="productQty" required>
            </div>
            <div class="form-group">
                <label>Product Images (Maximum 3)</label>
                <input type="file" class="form-control" id="productImage1" accept="image/*" required>
                <input type="file" class="mt-2 form-control" id="productImage2" accept="image/*">
                <input type="file" class="mt-2 form-control" id="productImage3" accept="image/*">
            </div>
            <button  class="btn btn-primary" onclick="addProduct();">Add Product</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>

</html>