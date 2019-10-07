<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    //Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'ifresh_db');
    
    //If the register button is clicked
    if(isset($_POST['register'])){
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);
        $position = mysql_real_escape_string($_POST['position']);

        //Ensure that form fields are filled properly
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($email)){
            array_push($errors,"Email is required");
        }
        if(empty($password_1)){
            array_push($errors,"Password is required");
        }
        if(empty($position)){
            array_push($errors,"Position is required");
        }

        if($password_1 != $password_2){
            array_push($errors,"The two passwords do not match");
        }

        //If there are no errors, save user to database
        if(count($errors) == 0){
            $password = md5($password_1);//Encrypt password before storing in database (security)
            $sql = "INSERT INTO accounts (Username, Email, Password, Position) VALUES ('$username','$email','$password','$position')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header("location: index.php");// redirect to home page
        }

    }
    
    // log user in from login page
    if(isset($_POST['login'])){
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);

        //Ensure that form fields are filled properly
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($password)){
            array_push($errors,"Password is required");
        }
        if(count($errors) == 0){
            $password = md5($password); // encrypt password before comparing with from database
            $query = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                // log user in
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header("location: index.php");// redirect to home page
            }else{
                array_push($errors, "wrong username/password combination");
                header('location: login.php');
            }
        }
    }

    // Logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>