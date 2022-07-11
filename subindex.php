<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaHub</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="./home-cinema-svgrepo-com.svg" type="image/x-icon">
    <script src="main.js"></script>
</head>

<body>
    <header>
        <a href="index.php" class="link">MediaHub</a>
    </header>
    <section>
        <div class="slide-view" id="slider">
            <div class="r-btn">
                <button class="btn" onclick="toggleL()">
                    <img src="./moovie.js-main/icons/left-arrow-svgrepo-com.svg" alt="" srcset="">
                </button>
            </div>
            <?php
            $path = $_GET['dir'];
            $contDir = scandir(".$path");
            for ($x = 3; $x < count($contDir); $x++) {
                $cont = $contDir[$x];
                if ($cont != "poster.jpg") {
                    print("<div class='card'>");
                    print("<a href='view.php?past=$path&link=$path/$cont'><img src='$path/poster.jpg' alt='poster'><p>$cont</p></a>");
                    print("");
                    print("\n</div>");
                }
            };
            ?>
            <div class="l-btn">
                <button class="btn" onclick="toggleR()">
                    <img src="./moovie.js-main/icons/right-arrow-svgrepo-com.svg" alt="">
                </button>
            </div>
        </div>
    </section>
</body>

</html>