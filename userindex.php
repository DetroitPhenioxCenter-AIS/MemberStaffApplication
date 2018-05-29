<?php
    session_start();
   
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet"> 
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="styles.css">
       <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
       <script type="text/javascript"> 
      $(document).ready( function() {
        $('#alert').delay(2000).fadeOut();
      });
    </script>
      <title>Super user</title>
   </head>
   <body id="adminpage">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><img class="img-responsive" height="40" src="http://www.detroitphoenixcenter.org/images/layer%200.png?crc=3873543260"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav ml-auto my-2 my-lg-0">
                  <li class="nav-item active">
                     <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                  <!--  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                     </li> -->
               </ul>
               <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
            </div>
         </nav>
         <div class="row">
  <div class="w-100">
  <ul class="nav nav-pills shadow"  role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"> <span class="fa fa fa-dashboard" style="color:#a8a8a8;"></span>	  Dashboard</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-file-text" style="color:#a8a8a8;"></span>	 Add Forms</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" data-toggle="pill" href="#d1">Employee</a>
      <a class="dropdown-item" data-toggle="pill" href="#d2">Member</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa fa-group" style="color:#a8a8a8;"></span>	View Profiles</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" data-toggle="pill" href="#v1">Employee</a>
      <a class="dropdown-item" data-toggle="pill" href="#v2">Member</a>
    </div>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2"> <span class="fa fa-cogs" style="color:#a8a8a8;"></span>   Settings</a>
    </li>
  </ul>
</div>
 <?php 
  $conn = mysqli_connect('127.0.0.1','root','');
   mysqli_select_db($conn,'USERBASE'); ?>
  <!-- Tab panes -->
  <div class="container">
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
   <?php   if(isset($_GET['adds']) && $_GET['adds'] == 'success'){ ?>
    <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
        Employee added.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['deletem']) && $_GET['deletem'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
        Member deleted.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['deletes']) && $_GET['deletes'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
        Employee deleted.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['addm']) && $_GET['addm'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
        Member added.
      </div></div>
  <?php } ?>

    <div class="row">
    <div class="col-md-3">
     <p>Hello <?php echo($_SESSION['u_id']); ?> !</p>
     </div>
      <div class="col-md-9">
      	
      </div>
     </div>
     <div class="row justify-content-center">
    <div class="col-md-3 m-4 card card-body ">
     <i class="fa fa-users text text-danger" style="font-size:48px;"></i><br>
   <h4> <?php 
    $countmem = mysqli_query($conn,"SELECT count(*) as total from member;");
    $countm = (mysqli_fetch_array($countmem)); 
    echo($countm[0]);

    ?> Members</h4>
    

     
     </div>
      <div class="col-md-3 m-4 card card-body justify-content-center">
      <i class="fa fa-user text text-success" style="font-size:48px;"></i><br>
      	<h4>
      	<?php 
    $countstaff = mysqli_query($conn,"SELECT count(*) as totals from userstaff;");
    $counts = (mysqli_fetch_array($countstaff)); 
    echo($counts[0]);

    ?> Staff<h4>
    
      </div>
       <div class="col-md-3 m-4 card card-body justify-content-center">
       <i class="fa fa-money text text-primary" style="font-size:48px;"></i><br>
       <h4>18 Donors<h4>
     
     </div></div>

     <div class="row justify-content-center">
     <div class="col-md-3 m-4 card card-body ">
       
       <i class="fa fa-dollar text text-dark" style="font-size:48px;"></i><br>
       <h4>$18000 Revenue</h4>
     
     </div>
      <div class="col-md-3 m-4 card card-body">
       <h4>REVENUE</h4>
       <h1>18<h1>
     
     
     </div>
      <div class="col-md-3 m-4 card card-body">
        <h4>REVENUE</h4>
       <h1>18<h1>
     
     </div>
      
     </div>
    </div>
    <div id="d1" class="container tab-pane fade"><br>
    
                        <form action="staffinsert.php" method="POST">
                           <div class="form-group">
                              <label for="Name">Name</label>
                              <input type="text" required name="name" class="form-control" id="Name" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <select required name="gender" class="form-control">
                                 <label for="inputEmail4">Gender</label>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                                 <option value="other">Other</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="Phone">Phone</label>
                              <input type="text" name="phone" class="form-control" id="Phone" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <label for="Desig">Position</label>
                              <input required type="text" name="desig" class="form-control" id="Desig" placeholder="Enter Name">
                           </div>
                           <button type="submit" name="sendmail" class="btn btn-danger">Submit</button>
                        </form>
    </div>
    <div id="d2" class="container tab-pane fade"><br>
    <h1>Member form</h1>
                        <form action="insert.php" method="POST">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputfn">First Name</label>
                                 <input type="text" name="FirstN" class="form-control" id="inputEmail4" placeholder="First name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputln">Last Name</label>
                                 <input type="text" name="LastN" class="form-control" id="inputPassword4" placeholder="Last Name">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Gender</label>
                                 <select name="Gender" class="form-control">
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                                 <option value="other">Other</option>
                              </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">DOB</label>
                                 <input type="text" name="DOB" class="form-control" id="inputPassword4" placeholder="mm/dd/yyyy">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Email</label>
                                 <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Phone</label>
                                 <input type="text" name="Phone" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">ID</label>
                                 <input type="text" name="ID" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Blood group</label>
                                 <input type="text" name="Bloodgroup" class="form-control" id="inputPassword4" placeholder="O+ etc.">
                              </div>
                           </div>
                           <div class="form-row">
                           <div class="form-group col-md-6">
                                 <label for="inputPassword4">Courses</label>
                                 <input type="text" name="Courses" class="form-control" id="inputPassword4" placeholder="course to be enrolled">
                              </div>
                              </div>
                         
                          

                            <!-- <div class="form-group">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="gridCheck">
                                 <label class="form-check-label" for="gridCheck">
                                 I agree to all the terms and conditions.
                                 </label>
                              </div>
                           </div>  -->
                           <button type="submit" name="addmem" class="btn btn-dark">Submit</button><br><br>
                        </form>
    </div>
    <div id="v1" class="container tab-pane fade"><br>
  <h2>Staff</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p> 
  <script>
jQuery(document).ready(function(){
 jQuery("#myInput").on("keyup", function() {
    var value = jQuery(this).val().toLowerCase();
    jQuery("#myTable tr").filter(function() {
      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
 
<?php
    $query = "SELECT * FROM userstaff";


// result for method one
$result1 = mysqli_query($conn, $query);

?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>View details</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
     <?php while($row1 = mysqli_fetch_array($result1)):?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="<?php echo'#'.$row1[0];?>">View profile</button></td>
                 <td><form action='deletestaff.php?name="<?php echo $row1[0]; ?>"' method="post">
        <input type="hidden" name="names" value="<?php echo $row1[0]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="submit" value="Delete">
    </form></td>
                <!-- The Modal -->
  <div class="modal fade" id="<?php echo $row1[0];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row1[0];?>'s Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          Name:<?php echo $row1[0];?><br>
          Email:<?php echo $row1[1];?><br>
          phone:<?php echo $row1[2];?><br>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div> 
  </tr>
     <?php endwhile;?>
    </tbody>
  </table>
  


  
</div>

    <div id="v2" class="container tab-pane fade"><br>
       <h2>Members</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p> 
  <script>
jQuery(document).ready(function(){
 jQuery("#myInput2").on("keyup", function() {
    var value = jQuery(this).val().toLowerCase();
    jQuery("#myTable2 tr").filter(function() {
      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 
  <input class="form-control" id="myInput2" type="text" placeholder="Search..">
  <br>
  <?php 
// mysql select query

    $query2 = "SELECT * FROM member";


// result for method one
$result2 = mysqli_query($conn, $query2);

?>
  <table class="table table-bordered justify-content-center table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>DOB</th>
        <th>View Profiles</th>
        <th> Delete</th>
      </tr>
    </thead>
    <tbody id="myTable2">
     <?php while($row2 = mysqli_fetch_array($result2)):
        $name=$row2[0];
        
     ?>
            <tr>
                <td><?php echo $row2[0];?></td>
                <td><?php echo $row2[1];?></td>
                <td><?php echo $row2[2];?></td>
                <td><?php echo $row2[3];?></td>
                <td><button type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="<?php echo'#'.$row2[0];?>">View profile</button>
                

                </td>
                <td>

                <form action='delete.php?name="<?php echo $row2[0]; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $row2[0]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="submit" value="Delete">
    </form>

                </td>
                <div class="modal fade" id="<?php echo $row2[0];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row2[0];?>'s Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          Name:<?php echo $row2[0];?><br>
          Email:<?php echo $row2[1];?><br>
          phone:<?php echo $row2[2];?><br>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div> 
            </tr>
     <?php endwhile;?>
    </tbody>
  </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>

    </div>
  </div>
</div>
          
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
   </body>
</html>

