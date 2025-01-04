<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MediaHub</title>
        <link rel="stylesheet" href="./src/css/moovie.css">
        <link rel="stylesheet" href="./main.css">
        <link rel="stylesheet" href="./view.css">
        <link rel="stylesheet" href="./media-player/style.css">
        <link rel="shortcut icon" href="./home-cinema-svgrepo-com.svg" type="image/x-icon">
    </head>
    <body>
        <header>
            <a href="index.php" class="link">MediaHub</a>
        </header>
        <section class="view">
            <?php
            $videoSrc = $_GET['link'];
            $dir = $_GET['past'];
            $downName = $_GET['video'];

            print("<div class='dn-btn v-btn'><a href='$videoSrc' download='$downName'><img src='./src/icons/down-arrow-download-svgrepo-com.svg' alt='' srcset=''></a></div>");

            if ($dir != "index.php") {
                print("<div class='bk-btn v-btn'><a href='subindex.php?dir=$dir'><img src='./src/icons/left-arrow-svgrepo-com.svg' alt='' srcset=''></a></div>");
            } elseif ($dir == "index.php") {
                print("<div class='bk-btn v-btn'><a href='$dir'><img src='./src/icons/left-arrow-svgrepo-com.svg' alt='' srcset=''></a></div>");
            }

            echo '<div class="frame">';
                include './media-player/index.php';
            echo '</div>';

            print("<script>document.addEventListener('DOMContentLoaded', function() {var demo = new Moovie({selector: '#example',dimensions: {width: '80%'},icons: {path: './src/icons/'}});});</script>");
            ?>
        </section>
        <script src="./media-player/script.js"></script> <!-- Link to external JavaScript file -->
    </body>
</html>