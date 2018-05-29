<?php
	$conn=mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($conn,'userbase');
		
	if(isset($_POST['addmem']))
   {
	$FirstN=$_POST['FirstN'];
	$LastN=$_POST['LastN'];
	$Gender=$_POST['Gender'];
	$DOB=$_POST['DOB'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$ID=$_POST['ID'];
	$Bloodgroup=$_POST['Bloodgroup'];
	$Courses=$_POST['Courses'];
	
	/*$PFirstN=$_POST['PFirstN'];
	$PLastN=$_POST['PLastN'];
	$PGender=$_POST['PGender'];
	$PEmail=$_POST['PEmail'];
	$PPhone=$_POST['PPhone'];
	$Prel=$_POST['Prel'];
	$add=$_POST['add'];
	$add2=$_POST['add2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];*/

	$sql = "INSERT INTO member(FirstN,LastN,Gender,DOB,Email,Phone,ID,Bloodgroup,Courses) VALUES ('$FirstN','$LastN','$Gender','$DOB','$Email','$Phone','$ID','$Bloodgroup','$Courses')";
	mysqli_query($conn,$sql);
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	
		require 'PHPMailerAutoload.php';
		require 'credential.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'Detroit Pheniox Center');
$mail->addAddress($_POST['Email']);     // Add a recipient
/*$mail->addAddress($_POST['PEmail']);               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');*/
//$mail->addCC($_POST['PEmail']);
// $mail->addBCC('bcc@example.com');

/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Email Confirmation';
$mail->Body    = '<html>
              <body style="font-family:Georgia, serif; ">
              <center>
        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>
            Hello!&nbsp'.$_POST['FirstN'].'
            <h3>THANK YOU!</h3> for joining
            <h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
             We promise that we will support you  to succeed in your life.
            <br>
            Please <a href="#">click here</a> create your password for the account using this link the user name is your registered email.<br><br>
            <div style="padding:20px;background-color: #2c3840;">
                    <a  href="http://www.detroitphoenixcenter.org/index.html" style="color:white;">OurWebsite</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.instagram.com/detroitphoenixcenter/" style="color:white;">Intsagram</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.linkedin.com/company/detroit-phoenix-center" style="color:white;">Linkedin</a>
            </div>

        </center>
        </div>

        </body> 
        </html>  ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
header('Location: index.php?addm=success');
}
	
	//header("refresh:2;form.php");
?>