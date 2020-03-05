<?php include('contact.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply within 24 hours!</h4>
    <fieldset>
      <input placeholder="Your Full Name" type="text" name="name" tabindex="1" value="<?= $name ?>" required autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" value="<?= $email ?>" required>
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number i.e 07XXXXXXXX" type="tel" name="phone" tabindex="3" value="<?= $phone ?>" required>
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" name="url" tabindex="4" value="<?= $url ?>" required>
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...."type="text" name="message" tabindex="5" required><?= $message ?></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success;?></div>
  </form>
 
  
</div>


</body>
</html>