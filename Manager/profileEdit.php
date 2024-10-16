<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/storeProEdit.css">
    <title>登録</title>
</head>
<body>
    <div class="">
        <form class="register-form" action="/submit_registration" method="post">
            <h2>Register</h2>
            <label for="店名"></label>
            <input type="email" id="email" name="email" placeholder="メールを入力" required>
    
            <label for="住所"></label>
            <input type="password" id="password" name="password" placeholder="パスワード" required>
    
            <label for="電話番号"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="もう一回パスワード" required>
    
            <button type="submit">
                <img src="./images/signupBtn.png" alt="Sign Up">
            </button>
        </form>
    </div>
</body>
</html>