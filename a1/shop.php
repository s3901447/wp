<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Graduate">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <img id='mogullogo' src='../../media/mogulmoveslogo.png' alt='Mogul Moves Logo' />
    </header>

    <nav>
        <a href="/~s3901447/wp/a1/index.php">Home</a>
        <a href="/~s3901447/wp/a1/shop.php">Shop</a>
        <a href="/~s3901447/wp/a1/product.php">Product</a>
    </nav>

    <main>
        <div class="shop">
            <img id='hoodie' src='../../media/ludmerch.png' alt='LudwigMerch' />
            <h3>Winter Mogul Moves Hoodie</h3>
            <p>This is a mid-weight pullover hooded sweatshirt with tear-away embroidery over a flower print, made with soft fleece and a generous fit for comfort. This sweatshirt is perfect to stay cozy and ludwigBlanket during the upcoming winter.</p>
            <img id='hoodie' src='../../media/qtmerch.png' alt='QtMerch' />
            <h3>QTCinderella Ders Hoodie</h3>
            <p>This is so stinky cute. Wear it while drinking some hot coca and listening to "Baby its cold outside"... jk... lmao.... unless?</p>
            <img id='hoodie' src='../../media/mizkifmerch.png' alt='MizkifMerch' />
            <h3>Mizkif "Eggers" Hoodie</h3>
            <p>I couldn't find a proper description for this but its a nice hoodie i guess.</p>
        </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Ludwig Ahgren, Mogul Moves Inc. Benjamin Wright, 3901447. <a href="https://github.com/s3901447/wp">Github Repository</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    </footer>

  </body>
</html>
