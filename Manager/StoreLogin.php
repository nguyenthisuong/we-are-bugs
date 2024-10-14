<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/StoreLogin.css">
    <title>ログイン</title>
</head>

<body>
    <div class="login-form">
        <h2>ログイン</h2>

        <form action="./php/StoreLoginP.php" method="POST"> <!-- Thay đổi đường dẫn đến file xử lý đăng nhập -->
            <div class="login-info">
            <?php if (isset($_GET['error']) && $_GET['error'] == 'username_not_found'): ?>
                <span style="color: red;">ユーザー名が存在しない！</span>
            <?php endif; ?>
                <input type="text" id="username" name="username" placeholder="ユーザー名を入力" required value="<?= isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '' ?>" >
                <?php if (isset($_GET['error']) && $_GET['error'] == 'incorrect_password'): ?>
                <span style="color: red;">パスワード違います</span>
            <?php endif; ?>
                <input type="password" id="password" name="password" placeholder="パスワードを入力" required>
                <button type="submit">ログイン</button>
            </div>
        </form>

        <div class="register-button">
            <a href="./StoreRegister.php">
                <button type="button">アカウント作成</button>
            </a>
        </div>

        <a href="#">パスワードを忘れた場合</a>
    </div>
</body>

</html>
