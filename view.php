<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaHub</title>
    <link rel="stylesheet" href="./moovie.js-main/css/moovie.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./view.css">
    <link rel="shortcut icon" href="./home-cinema-svgrepo-com.svg" type="image/x-icon">
    <script src="./moovie.js-main/js/moovie.js"></script>
</head>

<body>
    <header>
        <a href="index.php" class="link">MediaHub</a>
    </header>
    <section class="view">
        <?php
        $video = $_GET['link'];
        $dir = $_GET['past'];
        $downName = $_GET['video'];

        print("<div class='dn-btn v-btn'><a href='$video' download='$downName'><img src='./moovie.js-main/icons/down-arrow-download-svgrepo-com.svg' alt='' srcset=''></a></div>");

        if ($dir != "index.php") {
            print("<div class='bk-btn v-btn'><a href='subindex.php?dir=$dir'><img src='./moovie.js-main/icons/left-arrow-svgrepo-com.svg' alt='' srcset=''></a></div>");
        } elseif ($dir == "index.php") {
            print("<div class='bk-btn v-btn'><a href='$dir'><img src='./moovie.js-main/icons/left-arrow-svgrepo-com.svg' alt='' srcset=''></a></div>");
        }

        print("<video class='video' id='example' poster='<<path-to-video-poster>>'>");
        print("<source src='$video' type='video/mp4'>");
        print("<track kind='captions' label='Portuguese' srclang='pt' src='<<path-to-caption.vtt>'>");
        print("<track kind='captions' label='English' srclang='en' src='<<path-to-caption.vtt>>'>");
        print("</video>");
        print("<script>document.addEventListener('DOMContentLoaded', function() {var demo = new Moovie({selector: '#example',dimensions: {width: '80%'},icons: {path: './moovie.js-main/icons/'}});});</script>");
        ?>
    </section>
</body>

</html>