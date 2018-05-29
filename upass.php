   <?php 
	
	if (isset($_POST['crepass'])) 
	{
				$conn = mysqli_connect('127.0.0.1','root','');
	            mysqli_select_db($conn,'USERBASE');
	            echo 'database set';
				$usr = $_POST['usr'];
			    $pwd = $_POST['pwd'];
			    $spwd = $_POST['spwd'];

			   /* $usr = stripcslashes($usr);
			    $pwd = stripcslashes($pwd);
			    $usr = mysql_real_escape_string($usr);
			    $pwd = mysql_real_escape_string($pwd);*/
			    if($pwd != $spwd){
			       header('Location: createpassw.php?pass=no');	
			    }
			    echo 'variables set';
			    $sql = "SELECT Email FROM userstaff WHERE Email = '$usr'";
                $result = mysqli_fetch_array(mysqli_query($conn,$sql));
			    if($result[0]==$usr){
                   $sql2 = "INSERT INTO userlog (username,password) VALUES ('$usr','$pwd')";

                   mysqli_query($conn,$sql2);
                   header('Location: userlogin.php?register=yes');
                }
			    else{
			    	header('Location: usercreatepass.php?register=no');	
			    }
			    
               
}
else{
	header('Location: createpassw.php');
}
	
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	
		
	//header("refresh:2;form.php");

?>