<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy New Year</title>

    <style>
        @font-face {
            font-family: newYearFont;
            src: url(font/Ongdo2.ttf);
        }

        body {
            text-align: center;
            justify-content: center;
            background: url(img/backgroundBody.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .content-first {
            background: url(img/backgroundContentFirst.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            width: 460px;
            height: 300px;
            margin-top: 200px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .content-first-item {
            background: url(img/avatar.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            width: 185px;
            height: 185px;
            border-radius: 50%;
            margin-top: 61px;
        }

        .content-second {
            text-decoration: none;
            font-family: newYearFont;
            cursor: pointer;
            background: white;
            font-size: 25px;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            width: 460px;
            border-radius: 50px;
            padding: 7px 0;
            background-color: #DE1013;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 30px;
            color: #f7e3ac;
        }

        .content-second:hover {
            font-family: newYearFont;
            cursor: pointer;
            background: white;
            font-size: 25px;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            width: 460px;
            border-radius: 50px;
            padding: 7px 0;
            background-color: #f7e3ac;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 30px;
            color: #DE1013;
            transition: 1s ease-in;
        }
    </style>
</head>

<body>
    <audio controls autoplay hidden>
        <source src="audio/world-asian-carnival-china-traditional-music-travel-118593.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
    <div class="content-first">
        <div class="content-first-item"></div>
    </div>
    <br>
    <a href="flashcard.php" class="content-second">Mở thiệp</a>
    <script type="text/javascript" src="https://sharethuthuat.com/php/tet/tet.js"></script>
</body>

</html>