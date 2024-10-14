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
        header("Location: ../StoreRegister.php?error=username_exists&username=" . urlencode($username) . "&email=" . urlencode($email));

        exit();
    }
        // email 存在かどうか
        $check_email_sql = "SELECT * FROM user WHERE mail = ?";
        $stmt = $conn->prepare($check_email_sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            // 存在場合
            // header("Location: ../StoreRegister.php?error=email_exists");
            header("Location: ../StoreRegister.php?error=email_exists&username=" . urlencode($username) . "&email=" . urlencode($email));
            exit();
        }
        else {
            // INSERT 
            $sql = "INSERT INTO user (username, password, mail) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $password, $email);
            if ($stmt->execute()) {
                // FLAG　保存する
                echo "<script>
                        localStorage.setItem('registerSuccess', 'true');
                        window.location.href = '../StoreRegister.php';
                      </script>";
                exit();
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

// function generateToken() {
//     return bin2hex(random_bytes(16));
// }
?>
