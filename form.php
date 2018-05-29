<html>
<body>

Welcome <br>
<?php 

 $name=$_POST["name"];
 $email=$_POST["email"];
 
?>
<form action="add.php" method="get">
Name: <input type="text" value="<?php if(isset($name)){echo $name;} ?>"><br>
E-mail: <input type="text"  value="<?php if(isset($email)){echo $email;} ?>"><br>
</form>
</body>
</html> 