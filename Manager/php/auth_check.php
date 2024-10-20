<?php
session_start();

// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "dbuser";
$password = "ecc";
$dbname = "wearebugs";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("SERVER NOT FOUND"); // Sử dụng die() để dừng thực thi nếu kết nối lỗi
}

// Kiểm tra sự tồn tại của cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['token'])) {
    $user_id = $_COOKIE['username'];
    $token = $_COOKIE['token'];

    // Chuẩn bị và thực hiện truy vấn
    $sql = "SELECT * FROM user WHERE username = ? AND token = ?";
    $stmt = $conn->prepare($sql);

    // Sửa kiểu dữ liệu thành 'ss' vì cả username và token đều là chuỗi
    $stmt->bind_param("ss", $user_id, $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Nếu token không hợp lệ, chuyển về trang đăng nhập
        header("Location: StoreLogin.php?error=invalid_token");
        exit();
    }

    // Đóng tài nguyên
    $stmt->close();
    $conn->close();
} else {
    // Nếu không có cookie, chuyển về trang đăng nhập
    header("Location: StoreLogin.php?error=auth_check");
    exit();
}
?>
