    <?php
  			session_start();
    ?>
    <?php
	
	if (isset($_POST['alogin'])) 
	{
				$conn = mysqli_connect('127.0.0.1','root','');
	            mysqli_select_db($conn,'USERBASE');
	            echo 'database set';
				$usr = $_POST['usr'];
			    $pwd = $_POST['pwd'];
			   /* $usr = stripcslashes($usr);
			    $pwd = stripcslashes($pwd);
			    $usr = mysql_real_escape_string($usr);
			    $pwd = mysql_real_escape_string($pwd);*/
			    echo 'variables set';
			    $sql = "SELECT * FROM admin WHERE Name = '$usr' and Password = '$pwd'";
			    $result = mysqli_query($conn,$sql);
			    echo 'query executed';
			    $row = mysqli_fetch_array($result);
			
        if($row['Name'] == $usr and $row['Password'] == $pwd){
			    	$_SESSION['u_id'] = $usr;
			    	$_SESSion['pwd'] = $pwd;
			    	echo 'session set';
			    	header('Location: index.php?login=success');
			    }
			    else{
			    	header('Location: adminlogin.php?login=failure');
			    }
			    
               
}
else{
	header('Location: adminlogin.php');
}
	
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	
		
	//header("refresh:2;form.php");

?>