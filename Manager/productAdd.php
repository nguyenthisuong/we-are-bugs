<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/product.css">
    <title>商品追加</title>
</head>

<body>
    <div class="container">
        <div class="search-bar">
            <input type="text" placeholder="検索">
            <button>📷</button>
            <span>WRB</span>
        </div>

        <h2>商品追加</h2>

        <form>
            <img src="https://via.placeholder.com/150" alt="No Image" class="image-placeholder">

            <div class="form-group">
                <label>カテゴリー：</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>名前：</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>値段：</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>説明：</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>在庫：</label>
                <input type="text">
            </div>

            <button class="submit-button">追加</button>
        </form>
    </div>
</body>

</html>