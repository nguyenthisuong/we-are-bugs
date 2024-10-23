<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/addProduct.css">
    <link rel="stylesheet" href="../styles/All.css">
    <script src="https://unpkg.com/html5-qrcode"></script>
</head>
<body>
    <header>

    </header>
    <main>
    <h3>商品追加</h3>
    <div class="addContainer">
        <form class="proAddForm" action="" method="POST" enctype="multipart/form-data">
            <!-- Trường chọn ảnh -->
            <label for="productImage">商品画像:</label>
            <input type="file" id="productImage" name="productImage" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="imagePreview" src="#" alt="プレビュー画像" style="display:none; max-width:200px; margin-top:10px;">
            
            <!-- Category -->
            <label for="category">カテゴリー:</label>
            <select id="category" name="category" required>
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="child">Child</option>
            </select>
            <br>

            <!-- Tên sản phẩm -->
            <label for="pname">商品名:</label>
            <input type="text" id="pname" name="pname" required>
            <br>

            <!-- Giá bán -->
            <label for="price">価格:</label>
            <input type="number" id="price" name="price" required min="0" step="0.01">
            <br>

            <!-- Giá nhập hàng -->
            <label for="costPrice">仕入れ価格:</label>
            <input type="number" id="costPrice" name="costPrice" required min="0" step="0.01">
            <br>

            <!-- Mô tả sản phẩm -->
            <label for="description">商品説明:</label>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea>
            <br>

            <!-- Số lượng trong kho -->
            <label for="stockQuantity">在庫数量:</label>
            <input type="number" id="stockQuantity" name="stockQuantity" required min="0">
            <br>

            <!-- Tên sản phẩm -->
            <label for="barcode">バーコード:</label>
            <input type="text" id="barcode" name="barcode" required>
            <button type="button" id="start-scan">カメラでスキャン</button>
            <!-- Div để hiển thị camera -->
    <div id="barcode-scanner" style="display : none;"></div>

<script>
    const startScanButton = document.getElementById('start-scan');
    const barcodeInput = document.getElementById('barcode');
    const scannerDiv = document.getElementById('barcode-scanner');
    let html5QrcodeScanner;

    // Bắt đầu hoặc dừng quét camera
    startScanButton.addEventListener('click', () => {
        if (scannerDiv.style.display === 'none') {
            scannerDiv.style.display = 'block';
            startCamera();
            startScanButton.textContent = '停止';  // Nút đổi thành "Dừng"
        } else {
            stopCamera();
            startScanButton.textContent = 'カメラでスキャン';  // Nút đổi thành "Bật Camera"
        }
    });

    // Khởi động camera và quét mã barcode
    function startCamera() {
        html5QrcodeScanner = new Html5QrcodeScanner(
            "barcode-scanner", { fps: 10, qrbox: 250 });

        html5QrcodeScanner.render(onScanSuccess, onScanError);
    }

    // Xử lý khi quét thành công
    function onScanSuccess(decodedText) {
        barcodeInput.value = decodedText;  // Gán mã barcode vào input
        stopCamera();  // Tự động dừng sau khi quét thành công
        startScanButton.textContent = 'カメラでスキャン';
    }

    // Xử lý lỗi trong quá trình quét (tùy chọn)
    function onScanError(error) {
        console.warn(`Scan error: ${error}`);
    }

    // Dừng camera
    function stopCamera() {
        if (html5QrcodeScanner) {
            html5QrcodeScanner.clear().catch(error => console.error('Stop failed.', error));
        }
        scannerDiv.style.display = 'none';
    }
</script>

            <button type="submit">商品を追加する</button>
        </form>
    </div>
</main>
    <footer>

    </footer>
</body>
</html>