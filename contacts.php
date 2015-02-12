<?php require_once('init.php'); ?>
<?php

$message = '';
if (!empty($_POST)) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message_form = $_POST["message"];

  if (!empty($name) && !empty($email) && !empty($message_form)) {

    $message_to_send = "Name: " . $name . "<br>";
    $message_to_send .= "Email: " . $email . "<br>";
    $message_to_send .= "Message: <br>" . $message_form ;
    $message_to_send = wordwrap($message_to_send,70);

    // send email
    if (mail("simaocostaneves@gmail.com","New contact from Site!", $message_to_send)) {
      $message = 'Your message was sended successfully!<br> Thank you very much, will answer as soon as i can!';
    }
    else {
      $message = "Something went very wrong!";
    }
  }
}

?>
<?php require 'includes/header.php' ?>
    
  <title>Simão Neves - Contact me</title>
  <meta name="description" content="A way for you to contact me">
  <meta name="keywords" content="Simão Neves, web developer, software engineer, contacts">
  <script src="js/contacts.js"></script>

<?php require 'includes/after_header.php' ?>

          <header class="content_header">
            <h1>Contact me</h1>
            <?php printSocial("_min") ?>
          </header>

          <div class="content">

            <div class="double_col section">
              <h2>Would love to hear from you</h2>
              <div class="vert_bar">
                <div class="left_col">
                  <p>Lorem ipsum dolor sit amet, consectetur adipis
                  icing elit, sed do eiusmod tempor incididunt ut la
                  magna aliqua.Ut enim ad minim.Lorem ipsum dol
                  or sit amet, consectetur adipisicing elit, sed do eiu
                  tempor incididunt ut labore et dolore magna aliq
                  ua.Ut enim ad minimnsectetur adipisicing elit, sed
                  tempor incididunt ut labore et dolore magna aliq
                  ua.Ut enim ad min</p>
                  <?php printSocial("") ?>
                </div>
                <div class="right_col">
                  <?php
                    if (!empty($message)) {
                      echo $message;
                    }
                    else {

                  ?>
                  <form action="" onsubmit="return validateForm()" method="post" id="form">
                    <label>Your name:</label>
                    <input id="name" type="text" name="name" class="input_style">

                    <label>Your email:</label><br>
                    <input id="email" type="email" name="email" class="input_style" required>

                    <label>Your message:</label><br>
                    <textarea id="message" name="message" rows="4" class="input_style" required></textarea>

                    <input type="submit" class="btn">
                  </form>

                  <?php } // End if ?>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            
          </div>
<?php require 'includes/end.php' ?>