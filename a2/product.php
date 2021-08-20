<!DOCTYPE html>
<html lang='en'>

  <?php include 'tools.php';?>
  <?php heading() ?>

  <body>

    <?php head() ?>
    <div id='nav'><?php nav() ?></div>

    <script src="script.js"></script>

    <main>
        <div class="small-container">
        <h2 class='Title'>Winter Seasonal Hoodie</h2>
            <div class="row">
                <div class="col-4">
                    <img id="hoodie" src="../../media/mint.png" alt="Mogul Moves Hoodie">
                    <h4 id="titletext">Mint Mogul Moves Embroidered Hoodie</h4>
                    <div class="btn-group">
                      <input type="radio" name="colorway" id="MintRadio" onclick="changeImage(this.id)" checked>
                      <label>Mint</label>
                      <input type="radio" name="colorway" id="BoneRadio" onclick="changeImage(this.id)">
                      <label>Bone</label>
                      <input type="radio" name="colorway" id="PinkRadio" onclick="changeImage(this.id)">
                      <label>Pink</label>
                      </div>
                    <p>$50.00</p>
                    <!--<form action="https://titan.csit.rmit.edu.au/~e54061/wp/testproduct.php" method="POST">
                        
                    </form>-->

                    <div class="quantity">
                            <button onclick="subtract()" class="btn" type="button" name="button">
                                <i class="fa fa-minus-square"></i>
                            </button>
                            <input type="number" name="qty" id="number" min="1" max="100" value="0">
                            <button onclick="add()" class="btn" type="button" name="button">
                                <i class="fa fa-plus-square"></i>
                            </button>
                            <button onclick="SaveItem()">Add To Cart</button>
                        </div>

                </div>
            </div>
        </div>
    </main>

    <div id='footer'><?php footer() ?></div>

  </body>
  <?php debugModule() ?>
</html>
