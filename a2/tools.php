<?php
  session_start();
  function heading() { include 'head.php'; }
  function head() { include 'header.php'; }
  function nav() { include 'navigation.php'; }
  function footer() { include 'footer.php'; }
  
  function debugModule() 
  {    
	echo "<pre id='debug'>";     
	print_r($_POST);
	print_r($_SESSION); 
	echo "</pre>";    
  }
 ?>


