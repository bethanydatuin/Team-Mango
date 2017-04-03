<!DOCTYPE html>
<html>
  <head>
    <title>West Tennessee Fil-Am Association</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/interactions.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700" rel="stylesheet">
  </head>
  <body>
    
    <header class="header">
		<div class="container center clearfix">
			<ul class="nav">
        <li><a href="index.html">Home</a></li>
				<li><a href="history.html">History</a></li>
				<li><a href="activities.html">Activities</a></li>
				<li><a href="gallery.html">Photo Gallery</a></li>
				<li><a href="membership.html">Membership</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
    
    <!-- Banner -->
    <div class="banner shadow">
      <h1>West Tennessee Fil-Am Association</h1>
      <!-- Banner Image -->
      <div class="philippines"><img src="img/philippines.png"></div>
    </div>
    
    <div class="container clearfix">
    
      <div class="tertiary column">
        <h2>Thank you for contacting us!</h2>
      <p>We will get back to you as soon as possible.</p>
      </div>
      
    </div>
    
    <footer class="footer">

      <div class="container clearfix">
      
        <div class="primary-footer"><ul class="footer-li">
            <li><a href="index.html">Home</a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="activities.html">Activities</a></li>
            <li><a href="gallery.html">Photo Gallery</a></li>
            <li><a href="membership.html">Membership</a></li>
            <li><a href="contact.html" class="selected">Contact</a></li>
          </ul>
        </div>
        
        <div class="secondary-footer">
          <ul class="contact-footer">
            <li class="mail"><a href="mailto:filam.tn@gmail.com">filam.tn@gmail.com</a></li>
            <li class="facebook"><a href="http://facebook.com/wtfaa">wtfaa</a></li>
          </ul>
          
          <p class="footer-text">&copy; 2017 West Tennessee Fil-Am Association</p>
        </div>
        
      </div>
	  </footer>
    
  </body>
</html>

<?php 
if(isset($_POST['submit'])){
    $to = "filam.tn@gmail.com"; // WTFAA's Email
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);
   
    }
?>