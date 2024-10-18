<?php
session_start();
// $servername = "localhost";
// $username = "dbuser";
// $password = "ecc";
// $dbname = "wearebugs";

$servername = "localhost";
$username = "se2a_24_bugs";
$password = "X@7zERHL";
$dbname = "se2a_24_bugs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "SERVER NOT FOUND";
    exit();
}

// Kiểm tra session hoặc cookie token
if (isset($_COOKIE['username']) && isset($_COOKIE['token'])) {
    $user_id = $_COOKIE['username'];
    $token = $_COOKIE['token'];

    $sql = "SELECT * FROM user WHERE username = ? AND token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Token không hợp lệ, chuyển về đăng nhập
        header("Location: StoreLogin.php?error=invalid_token");
        exit(); // Dừng thực thi mã HTML sau khi chuyển hướng
    }
    $stmt->close();
    $conn->close();
} else {
    // Nếu không có session hoặc cookie, chuyển về đăng nhập
    header("Location: StoreLogin.php?error=auth_check");
    exit(); // Dừng thực thi mã HTML sau khi chuyển hướng
}
?>
