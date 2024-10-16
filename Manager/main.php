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
    <link rel="stylesheet" href="./styles/mainMgr.css">
    <title>Main Page</title>
</head>
<body>
    <h1>WELCOME</h1>
</body>
</html>
