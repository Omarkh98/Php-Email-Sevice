<?php 
include '../Facade.php';

$Message = "";

if(isset($_POST['submit'])) {
    
    $N = $_POST["N"];
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Body = $_POST["body"];
    $FullBody = $Body . "<br>" . "Name -- " . $N . "<br>" . "Email -- " . $Email;
    
    $Admin = "";
    
    $F = new Facade();
    
    $F->ClientEmail(array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true)), "smtp.gmail.com", true, "", '', 465
                   , "ssl", true, $Email, $Name , $Admin, '', $FullBody);
        
    if ($F->send) {
           $Message = '<label class="text-success">Email Sent Successfuly</label>';
        } 
    else {
           $Message = '<label class="text-danger">OOPS, Email Failed</label>'. $F->ErrorInfo;
    }
}
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Send Email</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
    <style type="text/css">
        body {
            text-align: center;
            margin-top: 250px;
            background-color:darkcyan;
        }
        label {
            color: white;
            font-size: 20px;
        }
        h3 {
            font-size: 30px;
        }
    </style>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
     <h3 align="center">Contact Us</h3>
     <br />
     <?php echo $Message; ?>
     <form method="post" action="ClientEmail.php" enctype="multipart/form-data">
     <div class="form-group">
       <label>Enter Name</label>
       <input type="text" name="N" placeholder="Name..." class="form-control" required>
      </div>
    <div class="form-group">
       <label>Enter Email</label>
       <input type="email" name="email" class="form-control" placeholder="Email..." required>
      </div>
      <div class="form-group">
       <label>Enter Subject</label>
       <input type="text" name="name" placeholder="Subject..." class="form-control" required>
      </div>
      <div class="form-group">
       <label>Enter Message</label>
       <textarea name="body" class="form-control" placeholder="Message..." required></textarea>
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="submit" value="Send Email" class="btn btn-danger" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
