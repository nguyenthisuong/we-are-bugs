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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // データ受け取り
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // ユーザー名存在かどうか
    $check_sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // 存在しない
        header("Location: ../StoreLogin.php?error=username_not_found&username=" . urlencode($username));
        exit();
    } else {
        // 存在場合
        $user = $result->fetch_assoc();
        //user data 取得
        $stored_password = $user['password']; 
        $userid = $user["userid"];

        // password check
        if ($password === $stored_password) {
            //TOKEN　発生
            $token = bin2hex(random_bytes(16)); 
             // DBに保存
             $update_token_sql = "UPDATE user SET token = ? WHERE userid = ?";
             $stmt = $conn->prepare($update_token_sql);
             $stmt->bind_param("si", $token, $userid);
             $stmt->execute();
            // session 開始
            session_start();
            $_SESSION['userid'] = $userid; 
            setcookie('username', $username, time() + (86400 * 30), "/"); //30day
            setcookie('token', $token, time() + (86400 * 30), "/");
            setcookie('loggedin', true, time() + (86400 * 30), "/");
            //page 移動
            header("Location: ../main.php");
            exit();
        } else {
            // パスワード違います
            header("Location: ../StoreLogin.php?error=incorrect_password&username=" . urlencode($username));
            exit();
        }
    }

    $stmt->close();
    $conn->close();
} else {
    // POSTではない
    echo "POSTではない";
}
?>
