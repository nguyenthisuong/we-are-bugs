<script>
    console.log(document.cookie);
</script>
<?php
// Gọi file xác thực người dùng trước khi load nội dung trang
include('./php/auth_check.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/mainMgr.css">
    <link rel="stylesheet" href="./styles/management.css">
    <title>Main Page</title>
</head>

<body>
    <div class="container">
        <!-- 左側のボタンメニュー -->
        <div class="menu">
            <button class="menu-button">
                <img src="tag-icon.png" alt="商品" class="icon">
                <span>商品</span>
            </button>
            <button class="menu-button">
                <img src="sale-icon.png" alt="割引" class="icon">
                <span>割引</span>
            </button>
            <button class="menu-button">
                <img src="stock-icon.png" alt="在庫" class="icon">
                <span>在庫</span>
            </button>
            <button class="menu-button">
                <img src="cart-icon.png" alt="注文" class="icon">
                <span>注文</span>
            </button>
            <button class="menu-button">
                <img src="customer-icon.png" alt="顧客" class="icon">
                <span>顧客</span>
            </button>
        </div>

        <!-- ロゴ部分 -->
        <div class="logo">
            <h1>WRB</h1>
            <p>Fashion & Boutique</p>
        </div>
    </div>
</body>

</html>