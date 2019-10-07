<?php
session_start();
	require 'databases.php';
	$message='';

	$sql = "INSERT INTO  forum (username,comment)values(:un,:co)";
		$stmt=$conn->prepare($sql);

		$stmt->bindParam(':un', $_POST['username']);
		$stmt->bindParam(':co', $_POST['comment']);
    if($stmt->execute())
    {
       
    }
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>
    <div class="header">

	<div class="reg-box">
	<form action="forum.php" method="POST">
		<br>
        
        <br><br>
        <input class="reg-txt1"type="hidden" placeholder="Name" name="username"value=<?php echo $_SESSION['username']?>>
			<br><input class="reg-txt2"type="text" placeholder="Comment" name="comment">
			<br><input class="reg-submit" type="submit">

            <br><input class="like" type="submit"value="Like">
	</form>
	<br>
	<?php
	if(!empty($message)): ?>
	<p> <?= $message ?> </p>
	<?php endif	; ?>
		</div>
	

	



    <table class="studs">
        <tr>
            <td> <h1>Feed Back</h1> </td>
            <td> <h1></h1> </td>
        </tr>
       
        </table>
      </div>
        
        <div >
       <table > 
            <tr>
            <th>USERNAME</th>
            <th>COMMENT</th>
        </tr> 
        <?php
          $conn = mysqli_connect("localhost","root","","wantshop"); 
          if($conn-> connect_error){
              die("Connection failed:". $conn-> connect_error);
          }   
          $sql = "SELECT username, comment from forum";
          $result = $conn-> query($sql);
          
          if($result-> num_rows> 0){
              while ($row = $result-> fetch_assoc()){
                  echo "<tr><td>".$row["username"]."</td><td>".$row["comment"]."</td></tr>";
              }
              echo"</table>";
          }
           
          else {
              echo "No Data";
          }
          $conn-> close();
        ?>  
    </table>
    </div>   
</body>
</html> 