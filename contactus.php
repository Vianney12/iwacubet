


<?php
include ('include/navbar.php') ; 
include ('include/header.php') ; 
include('include/db.php');



if (isset($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    
   $query=mysqli_query($con,"INSERT INTO contact (name,email,phone,subject,content ) VALUES ('$name','$email','$phone','$subject','$content')");
    $message = "Message successfuly sent.";
    $type = "success";
  
}
?>




<html>
<head>
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<form style="padding-right:10%; padding-left: 5%;" method="POST" action="" class="w3-container  w3-margin">

 <div id="statusMessage"> 
                        <?php
                        if ($query) {
                            ?>
                            <p class="w3-text-green" class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>

<h2 class="w3-center">Message us</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-user"></i></div>
   <label>Name</label>
    <div class="w3-rest">
      <input required class="w3-input w3-border" name="userName" type="text" placeholder="Your Full Name">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-envelope-o"></i></div>

   <label>E-mail</label>

    <div class="w3-rest">
      <input required class="w3-input w3-border" name="userEmail" type="email" placeholder="Your E-mail">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-phone"></i></div>
   <label>Phone Number</label>
    <div class="w3-rest">
      <input required class="w3-input w3-border" name="phone" type="phone" placeholder="Your Phone Number">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-pencil"></i></div>

   <label>Subject</label>
    <div class="w3-rest">
      <input required class="w3-input w3-border" name="subject" type="text" placeholder="Subject">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-pencil" required></i></div>
   <label>Message</label>
    <div class="w3-rest">
      <textarea class="w3-input w3-border" name="content" type="text" placeholder="Message" required> </textarea>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xlarge " required></i></div>
   <div class="w3-rest">
      
      <button name="send"  class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding">Send</button>


    </div>
</div>

</form>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
  <!-- include JavaScript validation here -->
</body>
</html>


<?php include('include/footer.php'); ?>