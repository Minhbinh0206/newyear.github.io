<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dragon Yaya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main">
        <div class="shadow-wrapper">
            <div class="shadow"></div>
        </div>
        <div class="dragon">
            <div class="body"></div>
            <div class="horn-left"></div>
            <div class="horn-right"></div>
            <div class="eye left"></div>
            <div class="eye right"></div>
            <div class="blush left"></div>
            <div class="blush right"></div>
            <div class="mouth"></div>
            <div class="tail-sting"></div>
        </div>
        <div class="fire-wrapper">
            <div class="fire"></div>
        </div>
        <div class="progress">
            <span>Loading...</span>
            <div class="outer">
                <div class="inner"></div>
            </div>
        </div>
    </div>
    <?php
    // Bắt đầu session
    session_start();

    // Lấy giây hiện tại
    $date = time();

    // Kiểm tra xem cookie 'currentSecond' đã được tạo chưa
    if (!isset($_COOKIE['currentSecond'])) {
        // Nếu chưa, lấy giây hiện tại và lưu vào cookie với thời hạn là 3 giây
        setcookie('currentSecond', date('s'), time() + 3);
    }

    // Kiểm tra nếu cookie 'currentSecond' tồn tại thì lấy giá trị, ngược lại gán giá trị mặc định là null
    $currentSecond = isset($_COOKIE['currentSecond']) ? $_COOKIE['currentSecond'] : null;
    $load = date('s', $date);

    // Kiểm tra nếu giây hiện tại và giây lưu trong cookie giống nhau
    if ($currentSecond == null) {
        header('Refresh: 3;url=home.php'); // Chuyển hướng sau 3 giây
        exit(); // Đảm bảo dừng thực thi ngay sau khi chuyển hướng
    }

    var_dump($load);
    var_dump($currentSecond);
    ?>
</body>

</html>