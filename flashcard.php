<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcards - Tết</title>
    <style>
        @font-face {
            font-family: newYearFont;
            src: url(font/Ongdo2.ttf);
        }

        body {
            text-align: center;
            font-family: newYearFont;
            background-color: #f0f0f0;
            margin: 0;
            text-align: center;
            justify-content: center;
            background: url(img/backgroundBody.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .first-content{
            display: block;
            margin-top: 150px;
            font-size: 60px;
            color: #ffefd4;
        }

        .flashcard-container {
            align-items: center;
            perspective: 1000px;
            justify-content: center;
        }

        .flashcard {
            margin: 0px 30px;
            display: inline-block;
            width: 250px;
            height: 350px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s;
            cursor: pointer;
        }

        .flipped {
            transform: rotateY(180deg);
        }

        .card {
            background: url(img/flashcard3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            letter-spacing: 2px;
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: white;
            border: 1px solid #ddd;
            font-size: 30px;
            color: #ffefd4;
        }

        .back {
            transform: rotateY(180deg);
            background: url(img/flashcardBack.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: red;
        }
        .content-second {
            padding: 7px 40px;
            text-decoration: none;
            font-family: newYearFont;
            cursor: pointer;
            background: white;
            font-size: 25px;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            border-radius: 50px;
            background-color: #DE1013;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 30px;
            color: #f7e3ac;
        }

        .content-second:hover {
            padding: 7px 40px;
            font-family: newYearFont;
            cursor: pointer;
            background: white;
            font-size: 25px;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
            border-radius: 50px;
            background-color: #f7e3ac;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 30px;
            color: #DE1013;
            transition: 1s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="first-content">
        Minh chu'c em năm mới
    </div>
    <br>
    <div class="flashcard-container">
        <div class="flashcard">
            <div class="card">
                <h2>Taâi <br> Lộc</h2>
            </div>
            <div class="card back">
                <h2>Chủ Đề 1 - Mặt Ngửa</h2>
                <p>Nội dung phụ của flashcard chủ đề 1 Tết - Mặt Ngửa.</p>
            </div>
        </div>

        <div class="flashcard">
            <div class="card">
                <h2>Tình <br> Duyeên</h2>
            </div>
            <div class="card back">
                <h2>Chủ Đề 2 - Mặt Ngửa</h2>
                <p>Nội dung phụ của flashcard chủ đề 2 Tết - Mặt Ngửa.</p>
            </div>
        </div>

        <div class="flashcard">
            <div class="card">
                <h2>Sức <br> Khỏe</h2>
            </div>
            <div class="card back">
                <h2>Chủ Đề 3 - Mặt Ngửa</h2>
                <p>Nội dung phụ của flashcard chủ đề 3 Tết - Mặt Ngửa.</p>
            </div>
        </div>

        <div class="flashcard">
            <div class="card">
                <h2>Sự <br> nghiệp</h2>
            </div>
            <div class="card back">
                <h2>Chủ Đề 4 - Mặt Ngửa</h2>
                <p>Nội dung phụ của flashcard chủ đề 4 Tết - Mặt Ngửa.</p>
            </div>
        </div>
    </div>
    <br>
    <a href="lixi.php" class="content-second">Nhận lì xì ngay</a>
    <script type="text/javascript" src="https://sharethuthuat.com/php/tet/tet.js"></script>
    <script>
        document.querySelectorAll('.flashcard').forEach(card => {
            card.addEventListener('click', () => {
                card.classList.toggle('flipped');
            });
        });
    </script>

</body>

</html>