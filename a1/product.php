<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winter Hoodie</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Graduate">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="small-container">
        <h2 class='Title'>Winter Seasonal Hoodie</h2>
            <div class="row">
                <div class="col-4">
                    <img src="../../media/mint.png" alt="Mint Hoodie">
                    <h4>Mint Embroidered Hoodie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$50.00</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/testproduct.php" method="POST">
                        <div class="quantity">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-minus-square"></i>
                            </button>
                            <input type="number" name="qty" id="mint" min="1" max="100">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-plus-square"></i>
                            </button>
                            <input type="submit" value="Buy">
                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <img src="../../media/bone.png" alt="Bone Hoodie">
                    <h4>Bone Embroidered Hoodie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/testproduct.php" method="POST">
                        <div class="quantity">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-minus-square"></i>
                            </button>
                            <input type="number" name="qty" id="bone" min="1" max="100">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-plus-square"></i>
                            </button>
                            <input type="submit" value="Buy">
                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <img src="../../media/pink.png" alt="Pink Hoodie">
                    <h4>Pink Embroidered Hoodie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/testproduct.php" method="POST">
                        <div class="quantity">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-minus-square"></i>
                            </button>
                            <input type="number" name="qty" id="pink" min="1" max="100">
                            <button class="btn" type="button" name="button">
                                <i class="fa fa-plus-square"></i>
                            </button>
                            <input type="submit" value="Buy">
                        </div>
                    </form>
                </div>
            </div>
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
