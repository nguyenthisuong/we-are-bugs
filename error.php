<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 2em;
        }
        .error-message {
            background-color: #f5c6cb;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin: 20px auto;
            display: inline-block;
            border-radius: 5px;
        }
        .home-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .home-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>エラーが発生しました。</h1>
    <div class="error-message">
        <?php
            // Lấy thông báo lỗi từ URL
            if (isset($_GET['error'])) {
                // Giải mã thông báo lỗi để tránh tấn công XSS
                $error = htmlspecialchars($_GET['error']);
                echo $error;
            } else {
                echo "エラーなし";
            }
        ?>
    </div>
    
    <a href="main.php" class="home-link">ホームページに戻る</a>

</body>
</html>
