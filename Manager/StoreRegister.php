<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/StoreRegister.css">
    <title>登録</title>
</head>
<body>
    <div class="">
        
        <form class="register-form" action="./php/register.php" method="post">
            <h2>Register</h2>

            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="ユーザー名入力" required value="<?= isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '' ?>" >
            <?php if (isset($_GET['error']) && $_GET['error'] == 'username_exists'): ?>
                <span style="color: red;">ユーザー名がすでに存在します！</span>
            <?php endif; ?>

            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="メールを入力" required value="<?= isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '' ?>" >
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
                <span style="color: red;">既に登録しているメールです！</span> <!-- Địa chỉ email không hợp lệ! -->
            <?php endif; ?>

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="パスワード" required>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'password_too_short'): ?>
                <span style="color: red;">パスワードは6文字以上でなければなりません！</span> <!-- Mật khẩu phải có ít nhất 6 ký tự! -->
            <?php endif; ?>

            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="もう一回パスワード" required>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch'): ?>
                <span style="color: red;">パスワードが一致しません！</span> <!-- Mật khẩu không khớp! -->
            <?php endif; ?>

            <button type="submit">
                <img src="./images/signupBtn.png" alt="Sign Up">
            </button>
        </form>

        <!-- Thông báo thành công -->
        <?php if (isset($_GET['success'])): ?>
            <p style="color: green;">登録に成功しました！</p> <!-- Đăng ký thành công! -->
        <?php endif; ?>
    </div>
</body>
</html>
