<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "dbuser";
$password = "ecc";
$dbname = "wearebugs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra phương thức POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = (int) $_POST['userid']; // Lấy userid từ form
    $sname = $conn->real_escape_string($_POST['sname']);
    $address = $conn->real_escape_string($_POST['address']);
    $tel = $conn->real_escape_string($_POST['phone']);

    ////////////////////////////////////////////

    // Kiểm tra xem userid có hợp lệ không
$check_user_sql = "SELECT * FROM user WHERE userid = ?";
$stmt = $conn->prepare($check_user_sql);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Lỗi: user không tồn tại.";
    exit();
}
    ///////////////////////////////////////////////
    // Thêm dữ liệu vào bảng store
    $sql = "INSERT INTO store (userid, sname, address, tel) 
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $userid, $sname, $address, $tel);

    if ($stmt->execute()) {
        // echo "add 成功";
        header("Location: ../main.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "post ではない";
}
?>
