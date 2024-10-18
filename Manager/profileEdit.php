<?php
// Gọi file xác thực người dùng trước khi load nội dung trang
include('./php/auth_check.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>
    <link rel="stylesheet" href="./styles/profile.css">
    <script src="./scripts/profile.js"></script>
</head>

<body>
    <div class="container">
        <!-- アイコン -->
        <div class="avatar-container">
            <img id="avatar-preview" class="avatar" src="./images/" alt="アイコン">
            <label class="upload-button" for="avatar-input">
                <img src="upload-icon.png" alt="上傳">
            </label>
            <input type="file" id="avatar-input" accept="image/*">
        </div>
        <!-- form^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <form action="./php/storeProEditP.php" method="POST">
    <div class="form">
    <input type="hidden" name="userid" id="userid" value="<?php echo isset($_COOKIE['userid']) ? $_COOKIE['userid'] : ''; ?>">
        <label for="shop-name">店名</label>
        <input type="text" id="shop-name" name="sname" required>

        <label for="address">住所</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">電話</label>
        <input type="text" id="phone" name="phone" required >
    </div>
    
    <div class="save">
        <button type="submit" class="save-button">
            <img src="./images/signupBtn.png" alt="save">
        </button>
    </div>
</form>
    </div>
</body>

</html>