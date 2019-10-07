<?php
    session_start();
    $id = "";
    $name = "";
    $price = "";
    $errors = array();

    //Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'wantshop');
    
    //If the register button is clicked
    if(isset($_POST['product'])){
        $id = mysql_real_escape_string($_POST['id']);
        $name = mysql_real_escape_string($_POST['name']);
        $price = mysql_real_escape_string($_POST['price']);

        //Ensure that form fields are filled properly
        if(empty($id)){
            array_push($errors,"Username is required");
        }
        if(empty($name)){
            array_push($errors,"Email is required");
        }
        if(empty($price)){
            array_push($errors,"Password is required");
        }
       

        //If there are no errors, save user to database
        if(count($errors) == 0){
        
            $sql = "INSERT INTO products (id, name, price, ) VALUES ('$id','$name','$price')";
            mysqli_query($db, $sql);
            
            
            header("location: cart.php");// redirect to home page
        }

    }
    
    
?>