<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form submission
    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

    // Hardcoded username and password
    $validUsername = "abc";
    $validPassword = "123";
    // Check if submitted credentials match hardcoded values
    if ($submittedUsername == $validUsername && $submittedPassword == $validPassword) {
        header("Location: productManage.php");
    } else {
        // Display an error message if credentials are incorrect
        $error = "Mật khẩu không chính xác";
    }
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Của Hàng Tạp Hóa Thừa Vân</title>
  <link rel="stylesheet" href="../styles/All.css">
  <link rel="stylesheet" href="../styles/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
    <div class="logo-container">
      <a href="../index.html"><img class="logoImage" src="../images/Untitled.png" alt="logo" width="125"></a>
    </div>
    <div class="search-container">
      <input class="search1" type="search" placeholder="Nhập tên sản phẩm ở đây">
    </div>
    <button class="menu-toggle" aria-label="Toggle navigation">
      <span class="menu-icon"></span>
    </button>
    <nav class="nav-menu">
      <ul>
        <li><a href="../index.html">TRANG CHỦ</a></li>
        <li><a href="#">SẢN PHẨM</a></li>
        <li><a href="#">VỀ CỬA HÀNG</a></li>
        <li><a href="#">ĐĂNG NHẬP</a></li>
        <li><a href="#">ĐĂNG KÝ</a></li>
        <li class="hotro">BẠN CẦN HỖ TRỢ?</li>
        <li class="support"><i class="fa fa-phone"></i><a class="support" href="tel:+84976131715">+84 976 131 715</a></li>
        <li class="support"><i class="fa fa-envelope"></i><a class="support" href="mail:taphoathuavan@.com">taphoathuavan@gmail.com</a></li>
        <li class="support"><i class="fa fa-map-marker"></i><a target="blank" class="support" href="https://www.google.com/maps/place/C%E1%BB%ADa+H%C3%A0ng+T%E1%BA%A1p+H%C3%B3a+Th%E1%BB%ABa+V%C3%A2n/@13.736501,109.0825916,17z/data=!3m1!4b1!4m6!3m5!1s0x316f118e939df8e5:0x920162b8af53ec8f!8m2!3d13.736501!4d109.0851665!16s%2Fg%2F11b67gdbds?entry=ttu">Thôn Hiệp Vinh 1, Canh Vinh, Vân Canh, Bình Định</a></li>
       </ul>
     </nav>
  </header>

<main>
    <h2>
        Đăng Nhập quản lý thông tin sản phẩmMMM
    </h2>
    <form method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
        <?php
        // Hiển thị thông báo lỗi nếu có HHH
        if (!empty($error)) {
            echo "<p style='color: red;'>$error</p>";
            $error="";
        }
        ?>
        <input type="submit" value="Đăng nhập">
    </form>
</main>
  <footer>
    <a href="../index.html"><img src="../images/Untitled.png" alt="logo" width="200" height="110 "></a>
    <div class="sns-icons">
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Dvi"><img src="../images/twitter.png" alt="twitter" width="32"></a>
        <a href="https://www.facebook.com/"><img src="../images/facebook.png" alt="facebook" width="32"></a>
        <a href="https://www.instagram.com/explore/tags/instafa/"><img src="../images/instagram.png" alt="instagram" width="32"></a>
      </div>
    <small> Copyright&commat;ThuaVan.All Rights Reserved.</small>
</footer>
<script src=""></script>
</body>
</html>

