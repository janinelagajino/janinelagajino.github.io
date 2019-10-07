<?php include('productser.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Registration</title>
    <link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>
    <div class=header>
        <h2>Product Register</h2>
    </div>

    <form method="post" action="product.php">
    <!-- display validation errors here -->
    <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Product ID</label>
            <input type="text" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="input-group">
            <label>Product Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
            <label>Price</label>
            <input type="text" name="price" value="<?php echo $price; ?>">
        </div>
        
        <div class="input-group">  
            <button type="submit" name="Save" class="btn">Save</button>
        </div>
       
    </form>
</body>
</html>