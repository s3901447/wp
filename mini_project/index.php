<?php
    include_once("tools.php"); 
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OrbicoBiz - Welcome!</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="wireframe.css">


</head>
  <body>
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
      <h1>Home Page</h1>
      <h2>Order Form</h2>
      <form id="order">
      <!-- I don't know why the background of the table is like this, I think its from the wireframe.css so I don't want to mess with it -->
        <table>
            <tr>
                <td>Name</td> 
                <td><input id="textbox" type="text"></td>
            </tr>
            <tr>
                <td>Email</td> 
                <td><input id="textbox" type="text"></td>
            </tr>
            <tr>
                <td>Mobile</td> 
                <td><input id="textbox" type="text"></td>
            </tr>
            <tr>
                <td>Address</td> 
                <td><input id="textbox" type="text"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox"> Remember Me</td>
            </tr>
            <tr>
                <td></td>
                <td><button id="complete">Complete Order</button></td>
            </tr>
        </table>
      </form>
      <button onclick="test()">test</button>
    </main>
    <footer>
      Footer Content
    </footer>
    <script src='script2.js'></script>
  </body>
</html>