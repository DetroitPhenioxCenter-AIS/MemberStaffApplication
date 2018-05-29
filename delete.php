<?php

$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');
//Define the query
$query = "DELETE FROM member WHERE FirstN='{$_POST['name']}'";

//sends the query to delete the entry
if (mysqli_query ($conn,$query)) { 
//if it updated
 header('Location: index.php?deletem=success');

} 