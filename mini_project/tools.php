<?php 
  session_start();

  $users = [
    'Alice' => 'passwordA',
    'Bob' => 'passwordB',
    'Carol' => 'passwordC',
  ];
  
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = $_POST['fname'];
      $password = $_POST['password'];
      logIO();
  }

  function logIO() {
    global $users;
    if (isset($_SESSION['user'])) {
    echo "true";
/* 
  To Do: log them out 
*/
    } else {
        echo "false";
        if($GLOBALS['fname'] == 'Alice'){
            if($GLOBALS['password'] == 'passwordA'){
                echo $GLOBALS['fname'] . $GLOBALS['password'];
            }
        }
        else if($GLOBALS['fname'] == 'Bob'){
            if($GLOBALS['password'] == 'passwordB'){
                echo $GLOBALS['fname'] . $GLOBALS['password'];
            }
        }
        else if($GLOBALS['fname'] == 'Carol'){
            if($GLOBALS['password'] == 'passwordC'){
                echo $GLOBALS['fname'] . $GLOBALS['password'];
            }
        }
        
        header("Location:index.php");
    }
  }

function navContent() {
  if(isset($_SESSION['user'])) {
/* 
  To Do: return the "logged in" version of the nav menu as a string
*/
  } else {
/* 
  To Do: return the "not logged in" version of the nav menu as a string
*/
  }
}

  function topModule($title) {
/* 
  To Do: print the top of the page with a page title
*/
  }

  function endModule() {
/* 
  To Do: print the end of the page
*/
  }
?>
