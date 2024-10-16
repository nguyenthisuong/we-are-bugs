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
            <img id="avatar-preview" class="avatar" src="./images/facebook.png" alt="アイコン">
            <label class="upload-button" for="avatar-input">
                <img src="upload-icon.png" alt="上傳">
            </label>
            <input type="file" id="avatar-input" accept="image/*">
        </div>

        <div class="form">
            <label for="shop-name">店名</label>
            <input type="text" id="shop-name">

            <label for="address">住所</label>
            <input type="text" id="address">

            <label for="phone">電話</label>
            <input type="text" id="phone">
        </div>

        <div class="save">
            <button class="save-button">
                <img src="./images/signupBtn.png" alt="save">
            </button>
        </div>
    </div>
</body>

</html>