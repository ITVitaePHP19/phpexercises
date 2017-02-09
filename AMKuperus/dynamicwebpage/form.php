<?php
  //If there is REQUEST_METHOD POST then do sendForm(), else show the form with
  //showForm()
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      sendForm();
    } else {
      showForm();
    }

  //Send the form with email(-->this is the gmail script paset in the code)
  function sendForm() {
    $account="itvitae1@gmail.com";
    $password="itvitae12";
    $to="itvitae1@gmail.com";
    $from= $_POST['email'];
    $from_name= $_POST['name'];
    $msg= $_POST['msg']; // HTML message
    $subject="A message was sent from the AMKuperus website.";
    /*End Config*/

    include("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth= true;
    $mail->Port = 465; // Or 587
    $mail->Username= $account;
    $mail->Password= $password;
    $mail->SMTPSecure = 'ssl';
    $mail->From = $from;
    $mail->FromName= $from_name;
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    if(!$mail->send()){
     echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
     echo "E-Mail has been sent";
    }
    echo "<p>Thank you for your message $from_name</p>";
    echo "<p>You send: </p>
          <div id='msg'>$msg</div>
          <p>to us, we will respond (if needed) to $from<br>
          Have a nice day!</p>";
  }
  //-->end of the gmail code.

  //Shows the form on the website
  function showForm() {
    echo '<h2>ContAct me...</h2>
    <form action="?p=form.php" method="POST">
      <fieldset>
        <legend>Send me A messAge</legend>
          Name: <input type="text" name="name" size="28" required><br>
          Email: <input type="email" name="email" size="28" required><br>
          Message<br>
          <textarea name="msg" rows="4" cols="30" required></textarea><br>
      <input type="submit" value="Send!">
      </fieldset>
    </form>';
  }
?>
