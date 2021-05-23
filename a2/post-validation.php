<?php

/*
Tip: In files that need to perform POST processing, include this file with this code:

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("post-validation.php");
}
*/

  $firstname = '';
  $firstnameError = '';

  if (isset($_POST['firstname'])) {
    // ... your code here ...
  }

?>
