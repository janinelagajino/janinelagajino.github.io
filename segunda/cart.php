<?php 
    session_start();
    $product_ids = array();
    //session_destroy();

    //check if Add to Cart button has been submitted
    if(filter_input(INPUT_POST, 'add_to_cart')){
        if(isset($_SESSION['shopping_cart'])){

            //keep track of how many products are in the shopping cart
            $count = count($_SESSION['shopping_cart']);

            //create sequantial array for matching array keys to products id's
            //$product_ids = array_column($_SESSION['shopping_cart'],'id');

            if(!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array
                (
                    'id' => filter_input(INPUT_GET, 'id'),
                    'name' => filter_input(INPUT_POST, 'name'),
                    'price' => filter_input(INPUT_POST, 'price'),
                    'quantity' => filter_input(INPUT_POST, 'quantity')
                );
            }
            else{ //product already exists, increase quantity
                //match array key to id of the product being added to the cart
                for($i = 0; $i < count($product_ids); $i++){
                    if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                        //add item quantity to the existing product in the array
                        $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                    }
                }
            }
        }
        else{ //if shopping cart doesn't exist, create first product with array key 0
            //create array using submitted form data, start from key 0 and fill it with values
            $_SESSION['shopping_cart'][0] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        }
    }

    if(filter_input(INPUT_GET, 'action') == 'delete'){
        //loop through all products in the shopping cart until it matches with GET id variable
        foreach($_SESSION['shopping_cart'] as $key => $product){
            if($product['id'] == filter_input(INPUT_GET, 'id')){
                //remove product from shopping cart when  it matches with  GET id
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
        //reset session array keys so they match with $product_ids numeric array
        $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);

    }

    //pre_r($_SESSION);

    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main">
        <header class="mainHeader">
            <div id="logo">
                <img src="wantshoppe.png">
            </div>
        </header>
        <nav class="mainNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="#">Services</a>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
                </li>
                <li><a href="#">Account</a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
                </li>
            </ul>
        </nav>
        <article class="mainContent">
        <div class="container">
    <!--- Php script for carting --->
    <?php
        $connect = mysqli_connect('localhost','root','','wantshop');
        $query = 'SELECT * FROM products ORDER BY id ASC';
        $result = mysqli_query($connect, $query);

        if($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3">
                    <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <!--- This area can input image script --->
                            <img src="<?php echo $product['img'];?>" class="img-responsive">
                            <h4 class="text-info"><?php echo $product['name'];?></h4>
                            <h4>$ <?php echo $product['price']?></h4>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="name" value="<?php echo $product['name'];?>">
                            <input type="hidden" name="price" value="<?php echo $product['price'];?>">
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Add to Cart">
                        </div>
                    </form>
                </div>
                <?php
                endwhile;
            endif;
        endif;
    ?>
    <div>
    
    </div style="clear:both">
    <br>
    <div class="table-responsive">
    <table class="table">
        <tr><th colspan="5"><h3>Order Details</h3></th></tr>
        <tr>
            <th width="40%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php
            if(!empty($_SESSION['shopping_cart'])):
                $total = 0;

                foreach($_SESSION['shopping_cart'] as $key => $product):
        ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td>$ <?php echo $product['price']; ?></td>
            <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
            <td>
                    <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
                        <div class="btn-danger">Remove</div>
                    </a>
            </td>
        </tr>
        <?php 
        
                $total = $total + ($product['quantity'] * $product['price']);
                endforeach;
        
        ?>
        <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
        </tr>
        <tr>
                <td colspan="5">
                    <?php
                        if(isset($_SESSION['shopping_cart'])):
                        if(count($_SESSION['shopping_cart']) > 0):
                    ?>
                    <a href="#" class="button">Checkout</a>
                <?php endif; endif;?>
                </td>
        </tr>
        <?php
            endif;
        ?>
        </table>
    </div>
    <!------------------------------> 
    </div>
        </article>
        <aside class="mainAside"></aside>
        <footer class="mainFooter">
            <p>Wantshoppe Shopping Site, Copyright &copy; 2018</p>
        </footer>
    </section>
</body>
</html>