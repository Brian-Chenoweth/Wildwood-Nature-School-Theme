
<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/SMTP.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST,"user_email",FILTER_SANITIZE_EMAIL));
  $category = trim(filter_input(INPUT_POST,"user_category",FILTER_SANITIZE_SPECIAL_CHARS));
  $title = trim(filter_input(INPUT_POST,"user_title",FILTER_SANITIZE_STRING));
  $details = trim(filter_input(INPUT_POST,"user_details",FILTER_SANITIZE_SPECIAL_CHARS));


  if ($name == "" || $email == "" || $category == ""  || $title == "") {
    $error_message =  "Please fill in the required fields: Name, Email, Category, Title";
  }

  if ($_POST["address"] != "") {
    $error_message =  "Bad form input";
  }

  if (!PHPMAILER::validateAddress($email)) {
    $error_message =  "Invalid Email Address";
  }

  if (!isset($error_message)) {

  



      $email_body = "";
      $email_body .= "Name: " . $name . "\n";
      $email_body .= "Email: " . $email . "\n";
      $email_body .= "Category: " . $category . "\n";
      $email_body .= "Title: " . $title . "\n";
      $email_body .= "Details: " . $details . "\n";


      //To Do: Send email
      $mail = new PHPMailer;




    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "brianmchenoweth@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "vxwgcarzodoqnzgo";




      //It's important not to use the submitter's address as the from address as it's forgery,
      //which will cause your messages to fail SPF checks.
      //Use an address in your own domain as the from address, put the submitter's address in a reply-to
      $mail->setFrom('brianmchenoweth@gmail.com', $name);
      $mail->addReplyTo($email, $name);
      $mail->addAddress('brianmchenoweth@gmail.com', 'Brian Chenoweth');
      $mail->addAddress('brian.michael.chenoweth@gmail.com', 'Brian Chenoweth');
      $mail->Subject = 'Contact from ' .$name;
      $mail->Body = $email_body;
      if ($mail->send()) {
          header("location:/?status=thanks#thank-you");
          exit;
      }
        $error_message =  "Mailer Error: " . $mail->ErrorInfo;
  }
}

?>




<div class="section page">
    <h1>Suggest a Media Item</h1>
</div>
<?php 
if (isset($error_message)) {
  echo '<p>' . $error_message . '</p>';
}
?>

<?php if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
echo '<h2 id="thank-you">Thanks!</h2>';
}

else { ?>


<form method="post" action="/">
  <table>
    <tr>
      <th><label for="user_name">Name (required)</label></th>
      <td><input type="text" id="user_name" name="user_name"></td>
    </tr>
    <tr>
      <th><label for="user_email">Email (required)</label></th>
      <td><input type="text" id="user_email" name="user_email"></td>
    </tr>
    <tr>
      <th><label for="user_category">Category (required)</label></th>
      <td><select id="user_category" name="user_category">
        <option value="">Select One</option>
        <option value="Books">Books</option>
        <option value="Movies">Movies</option>
        <option value="Music">Music</option>
      </select></td>
    </tr>
    <tr>
      <th><label for="user_title">Title (required)</label></th>
      <td><input type="text" id="user_title" name="user_title"></td>
    </tr>
    
    <tr>
      <th><label for="user_details">Suggest Item Details</label></th>
      <td><textarea name="user_details" id="user_details"></textarea></td>
    </tr>
    <tr style="display: none;">
      <th><label for="user_address">Address</label></th>
      <td><input type="text" id="user_address" name="user_address"><p>Please leave this field blank.</p></td>
    </tr>
  </table>

  <input type="submit" value="Send" name="submitform">

</form>

<?php } ?> 