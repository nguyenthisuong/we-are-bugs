
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/addProduct.css">
    <link rel="stylesheet" href="../styles/All.css">
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

            <button type="submit">商品を追加する</button>
        </form>
    </div>
</main>
    <footer>

    </footer>
</body>
</html>