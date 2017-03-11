<!DOCTYPE html>
<?php
  include 'head.inc.php';
?>
<body>
  <h1>Test email</h1>
    <div class="box loginbox"><table><form action="" method="POST">
      <tr><td><p>Name: </td><td><input type="text" name="name"></p></td></tr>
      <tr><td><p>Message: </td><td><input type="text" name="text"></p></td></tr>
      <tr><td><p>Email: </td><td><input type="email" name="email"></p></td></tr>
      <tr><td></td><td><input id="loginbtn" type="submit" value="Submit"></td></tr>
    </form></table></div>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //Filter the input
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        //Setup
        include 'mailconfig.inc';
        //Addresfields
        $mail->addAddress($email, $name);//Recipient
        //$mail->addReplyTo('test@amkuperus.nl', 'NoReply');
        $mail->isHTML(true);
        //Create the email head/body
        $mail->Subject = "Message from $name";
        $mail->Body = 'A message from ' .$name . ' Message: ' . $text;

        if(!$mail->send()) {
          echo 'Error sending the message ';
          echo $mail->ErrorInfo;
        } else {
          echo 'Message has been sent.';
        }
      }
    ?>
  </body>
</html>
