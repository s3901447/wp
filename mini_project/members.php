<?php
  include_once("tools.php"); 
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OrbicoBiz - Welcome!</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="wireframe.css">
    <script src='script2.js'></script>
</head>

<body onclick="checkLoggedIn()">
    
    <div class="container">
        <header>
            <!-- Image sourced and adapted from www.rmit.edu.au for educational purposes only -->
            <img id="logo" src='orbicobiz-logo.png' alt='Orbicobiz Logo' height="100px"/>OrbicoBiz
        </header>
        <nav>
          <div id="nav">Logged in as ...</div>
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./members.php">Members</a></li>
            <li><button id="login" onclick="showLoginDetails()">Login</button></li>
          </ul>
          <br>
          <div id="logindetails">
            <form method="POST" name="logins" action="tools.php">
              <ul>
                <li><input name="fname" id="fname" type="text"></li>
                <li><input name="password" id="password" type="text"></li>
                <li><input type="submit" onclick="memberLogIn()" id="submit"></li>
              </ul>
             </form>
          </div>
        </nav>
    </div>

	<main>
	  <h1>Members Only Page</h1>
	  <p><img id="construction" src='website-under-construction.png' alt='Website Under Construction' /></p>
	  <p>This page is for members only</p>
	</main>

</body>

