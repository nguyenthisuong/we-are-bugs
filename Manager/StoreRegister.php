<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/StoreRegister.css">
    <title>登録</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.7/lottie.min.js"></script>
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

        <div id="loading" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); justify-content: center; align-items: center;">
        <div id="lottie"></div>
        </div>
        <script>
            // Khởi tạo Lottie
            document.addEventListener('DOMContentLoaded', function () {
    // Khởi tạo Lottie
    const animation = lottie.loadAnimation({
        container: document.getElementById('lottie'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: './images/loading.json' // Đảm bảo đường dẫn này là chính xác
    });

    // Hiện animation khi người dùng nhấn nút đăng ký
    document.querySelector('.register-form').addEventListener('submit', function (event) {
        // Ngăn chặn hành động gửi form ngay lập tức
        event.preventDefault();
        document.getElementById('loading').style.display = 'flex';

        // Gửi form sau 4 giây
        setTimeout(() => {
            // Gửi dữ liệu form
            this.submit();
        }, 2500); // Thời gian hiển thị animation
        });
    });
        </script>
<?php 
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    // Nếu 'success' có giá trị 'true', chuyển hướng đến 'smain.php'
    header('Location: ./main.html');
    exit; // Đảm bảo dừng các mã PHP sau khi chuyển hướng
} 
?>
    </div>
</body>
</html>
