<script>console.log(document.cookie);
</script>
<?php
// Gọi file xác thực người dùng trước khi load nội dung trang
include('./php/auth_check.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <h1>Chào mừng đến với trang chính!</h1>
    <p>Bạn đã đăng nhập thành công.</p>
</body>
</html>
