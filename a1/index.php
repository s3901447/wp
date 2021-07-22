<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mogul Moves Inc.</title>

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
        <img id='bioimg' src='../../media/ludwig.png' alt='Ludwig' />
        <p id='bio'>Ludwig Anders Ahgren is an American <a href="https://twitch.tv/ludwig">Twitch</a> streamer, <a href="https://www.youtube.com/channel/UCrPseYLGpNygVi34QpGNqpA">Youtuber</a>, and esports commentator and competitor. Ahgren is best known for his livestreams on Twitch, where he broadcasts video game-related content as well as non-video game-related content such as game shows, contests, and gambling.</p>
        <img id='bioimg' src='../../media/qtcinderella.png' alt='QtCinderella' />
        <p id='bio'>QTCinderella (Blair) is an 21-year-old <a href="https://www.twitch.tv/qtcinderella">Twitch</a> streamer and content creator from California. She is known for her gaming streams, singing duets and just chatting streams/<a href="https://www.youtube.com/channel/UCAaCnaGdVpNzylKpou646vw">videos</a> which helped her grow in popularity, gaining her over 400,000 followers as of 2021.</p>
        <img id='bioimg' src='../../media/mizkif.png' alt='Mizkif' />
        <p id='bio'>Matthew Rinaudo, also known by his online alias Mizkif, is an American <a href="https://www.twitch.tv/mizkif">Twitch</a> streamer. He is a founding member of gaming organization <a href="https://www.youtube.com/channel/UCgpRORu9JQFC_jtQeQ99hBA">One True King</a>.</p>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Ludwig Ahgren, Mogul Moves Inc. Benjamin Wright, 3901447. <a href="https://github.com/s3901447/wp">Github Repository</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    </footer>

  </body>
</html>
