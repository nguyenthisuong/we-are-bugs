<?php

// connect
$servername = "localhost";
$username = "dbuser";
$password = "ecc";
$dbname = "wearebugs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "SERVER NOT FOUND";
    exit();
}

// 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // データ受け取り
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $email = $conn->real_escape_string($_POST['email']);

    // username 存在かどうか
    $check_sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // 存在場合
        // echo "ユーザー名存在します";
        // header("Location: ../StoreRegister.php?error=username_exists");
        
        header("Location: ../StoreRegister.php?error=username_exists&username=" . urlencode($username) . "&email=" . urlencode($email));

        exit();
    }
        // Kiểm tra email có tồn tại không
        $check_email_sql = "SELECT * FROM user WHERE mail = ?";
        $stmt = $conn->prepare($check_email_sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            // Nếu email đã tồn tại
            // header("Location: ../StoreRegister.php?error=email_exists");
            header("Location: ../StoreRegister.php?error=email_exists&username=" . urlencode($username) . "&email=" . urlencode($email));
            exit();
        }
     else {
        // token 発生
        $token = generateToken();

        // INSERT 
        $sql = "INSERT INTO user (username, password, mail, token) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $password, $email, $token);

        if ($stmt->execute()) {
            echo "登録成功 <br>";
            header("Location: ../main.html");
            // echo "userID: " . $user_id . "<br>";
            // echo "Username: " . $username . "<br>";
            // echo "email: " . $family_id . "<br>";
        } else {
            echo "insert ERROR";
        }
    }
    $stmt->close();
    $conn->close();
} else {
    // POST ではない
    echo "POST　ではない";
}

function generateToken() {
    return bin2hex(random_bytes(16));
}
?>
