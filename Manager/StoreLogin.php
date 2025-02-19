<?php
//xóa coookie khi trang login dc khởi động
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 86400, "/");
}
if (isset($_COOKIE['token'])) {
    setcookie('token', '', time() - 86400, "/");
}
if (isset($_COOKIE['userid'])) {
    setcookie('userid', '', time() - 86400, "/");
}
if (isset($_COOKIE['loggedin'])) {
    setcookie('loggedin', '', time() - 86400, "/");
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/StoreLogin.css">
    <title>ログイン</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.7/lottie.min.js"></script>
</head>

<body>
    <div class="login-form">
        <h2>ログイン</h2>
        <form class="login-form2" action="./php/StoreLoginP.php" method="POST"> 
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

        <!-- loading -->

        <div id="loading" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); justify-content: center; align-items: center;">
        <div id="lottie"></div>
        </div>
        <script>
    // Lottie 起動
    document.addEventListener('DOMContentLoaded', function () {
// Lottie
const animation = lottie.loadAnimation({
container: document.getElementById('lottie'),
renderer: 'svg',
loop: true,
autoplay: true,
path: './images/loading.json' 
});

// animation
document.querySelector('.login-form2').addEventListener('submit', function (event) {
// 
event.preventDefault();
document.getElementById('loading').style.display = 'flex';

// set time animation
setTimeout(() => {
    this.submit();
}, 2500); 
});
});
</script>

        <!-- loading -->

        <div class="register-button">
            <a href="./StoreRegister.php">
                <button type="button">アカウント作成</button>
            </a>
        </div>

        <a href="#">パスワードを忘れた場合</a>
    </div>
</body>

</html>
