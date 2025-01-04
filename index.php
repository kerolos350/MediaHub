<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaHub</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="shortcut icon" href="./home-cinema-svgrepo-com.svg" type="image/x-icon">
    <script src="./main.js"></script>
</head>

<body>
    <header>
        <a href="index.php" class="link">MediaHub</a>
    </header>
    <section>
        <div class="slide-view" id="slider">
            <div class="r-btn">
                <button class="btn" onclick="toggleL()">
                    <img src="./src/icons/left-arrow-svgrepo-com.svg" alt="" srcset="">
                </button>
            </div>
            <?php
            $contDir = scandir('./content');
            for ($x = 2; $x < count($contDir); $x++) {
                $cont = $contDir[$x];
                $contCont = scandir("./content/$cont");

                if ($contCont[2] != "1") {
                    $video = $contCont[3];
                    print("<div class='card'>");
                    print("<a href='view.php?link=./content/$cont/$video&past=index.php&video=$video'><img src='./content/$cont/poster.jpg' alt='poster'><p>$cont</p></a>");
                    print("");
                    print("\n</div>");
                } elseif ($contCont[2] == "1") {
                    print("<div class='card'>");
                    print("<a href='subindex.php?dir=./content/$cont'><img src='./content/$cont/poster.jpg' alt='poster'><p>$cont</p></a>");
                    print("");
                    print("\n</div>");
                }
            };
            ?>
            <div class="l-btn">
                <button class="btn" onclick="toggleR()">
                    <img src="./src/icons/right-arrow-svgrepo-com.svg" alt="">
                </button>
            </div>
        </div>
    </section>
</body>

</html>