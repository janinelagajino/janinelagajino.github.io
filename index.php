<?php
  session_start();
  if(isset($_SESSION['admin'])){
	header('location: home.php');
  }
?>
<?php include 'includes/header.php'; ?>
<style>
  .hero-image {
  background-image: url("./logo/galvanizing1.png");
  background-color: #cccccc;
  height: 657px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  }
</style>

<body>
<div class="hero-image">
	<div class="container">
	  <div class="row justify-content-center">
      	<div class="col-xl-10 col-lg-12 col-md-9" style="margin-top:60px;">
			<div class="card o-hidden border-0 shadow-lg my-5">
			<?php
			  if(isset($_SESSION['error']))
			  {
  				echo "
  				<div class='text-center text-danger mt20' style='font-weight:bold';>
				  <p><i class='fa fa-ban'></i>
						".$_SESSION['error']."</p>
					
					 
			  	</div>
  				";
  				unset($_SESSION['error']);
  			  }
  	  	  	?>
          		<div class="card-body p-0">
					<div class="row">

              			<div class="col-lg-6 d-none d-lg-block bg-gradient-success">
                			<p class="header text-light mb-4" style="font-weight: bolder; text-align:center; margin-top:15px;">Online Attendance Monitoring and Payroll
							</p>

                <img src="./logo/2019_04_29_23_15_IMG_0937.JPG" class="rounder-circle" alt="Avatar" style="border-radius:50%;width:200px; margin-left:115px; margin-top:5px;">
                
				<p class="text-light mb-4" style="font-weight: normal; text-align:center; margin-top:20px;">
				GALVANIZING SPECIALIST MANUFACTURING INC.
                <br>
				56 Altoveros St. Brgy. Bagbaguin Meycauayan Bulacan
              	</p>
           				</div>
		   		
				   <div class="col-lg-6 bg-gradient-info">
                	 <div class="p-5">
                  		<div class="text-center">
                    		<h1 class="h4 text-light mb-4">Log In</h1>
            		</div>
    	
    	<form action="login.php" class="user" method="POST" autocomplete="off">
			<span>
			<i class="fa fa-user" style="color:white; margin-left:18px;"></i>
			</span>
            <label class="text-light">Username</label>
      		<div class="form-group">
        		<input type="text" class="form-control" name="username" 		placeholder="Enter Username" required autofocus>
      		</div>

		  <div class="form-group">
            <span>
			<i class="fa fa-lock" style="color:white; margin-left:18px;"></i>
			</span>
            	<label class="text-light">Password</label>
                	<input type="password" class="form-control mb-2" name="password" placeholder="Enter Password" required>
					<p>
					<span class="text-light sm-2 ml-2">Forgot Password?
					</span>

					<a href="./admin/includes/forgotpass.php">
						<span class="text-light ml-1">click here</span>
					</a>
					</p>
					
         </div>

      		<div class="row">
    			<div class="col-xs-4 ml-2">
          			<button type="submit" class="btn btn-success btn-block btn-flat" name="login"><i class="fa fa-sign-in-alt mr-2"></i>Sign In</button>
        		</div>
				
      		</div>
    	</form>
  		</div>
	</div>
</div>
</div>
	
<?php include 'includes/scripts.php' ?>


</body>
</html>