<h2>Contact Us</h2>

<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

  <input type="text" name="name" id="name" placeholder="Your Name *">

  <input type="email" name="email" id="email" placeholder="Your Email *">

  <input type="tel" id="phone" name="phone" placeholder="Phone">

  <textarea name="comments" id="comments" placeholder="Message" class="comments"></textarea>

  <input type="submit" name="send" id="send" value="Submit" class="btn">

</form>

<?php
  if ($_GET) {
      echo 'Content of the $_GET array:<br>';
      print_r($_GET);
  } elseif ($_POST) {
      echo 'Content of the $_POST array:<br>';
      print_r($_POST);
  }   
?>
