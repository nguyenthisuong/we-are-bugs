<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRB - Home</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="menu-icon">☰</div>
        <input type="text" class="search-bar" placeholder="Search...">
        <h1 class="logo">WRB</h1>
    </div>
    <nav class="nav-menu">
        <ul>
          <li><a href="main.php">ホームページ</a></li>
          <li><a href="#">商品</a></li>
          <li><a href="#">お店について</a></li>
          <li><a href="#">会員登録</a></li>
          <li><a href="#">ログイン</a></li>
          <li class="support-title">サポート</li>
          <li class="support"><i class="fa fa-phone"></i><a class="support" href="tel">+81000000000000</a></li>
          <li class="support"><i class="fa fa-envelope"></i><a class="support" href="mail:">srb@ecc.ac.jp</a></li>
          <li class="support"><i class="fa fa-map-marker"></i><a target="blank" class="support" href=""></a></li>
         </ul>
       </nav>
       <div class="overlay"></div>

       <div class="filter-buttons">
    <button class="filter-button" data-target="#men">Men</button>
    <button class="filter-button" data-target="#women">Women</button>
    <button class="filter-button" data-target="#child">Children</button>
    <button class="filter-button">Special Events</button>
</div>

<section class="best-sellers">
    <h2>Best Sellers</h2>
    <div class="slider">
        <button class="arrow left">&#10094;</button>
        <div class="product-grid">
            <div class="product">
                <img src="./images/facebook.png" alt="Facebook" />
            </div>
            <div class="product">
                <img src="./images/top_button.png" alt="Top Button" />
            </div>
            <div class="product">
                <img src="./images/twitter.png" alt="Twitter" />
            </div>
        </div>
        <button class="arrow right">&#10095;</button>
    </div>
    <script src="./scripts/menubest.js"></script>
</section>



<section id="product-section" class="category">
    <!-- Nhóm Men -->
    <div class="group" id="men">
        <h1 class="title">Men</h1>
        <div class="product-showcase">
            <div class="product-content">
                <img src="./images/facebook.png" alt="White Dress" />
                <p class="rotated-text">White Dress<br>8000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Black Suit" />
                <p class="rotated-text">Black Suit<br>12000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Blue Shirt" />
                <p class="rotated-text">Blue Shirt<br>5000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Jacket" />
                <p class="rotated-text">Jacket<br>15000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Jeans" />
                <p class="rotated-text">Jeans<br>6000 ¥</p>
            </div>
        </div>
        <button class="show-more-btn" data-group="men">Show More</button>
    </div>

    <!-- Nhóm Women -->
    <div class="group" id="women">
        <h1 class="title">Women</h1>
        <div class="product-showcase">
            <div class="product-content">
                <img src="./images/facebook.png" alt="Red Dress" />
                <p class="rotated-text">Red Dress<br>9000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Green Top" />
                <p class="rotated-text">Green Top<br>7000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Yellow Skirt" />
                <p class="rotated-text">Yellow Skirt<br>7500 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Coat" />
                <p class="rotated-text">Coat<br>10000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Scarf" />
                <p class="rotated-text">Scarf<br>3000 ¥</p>
            </div>
        </div>
        <button class="show-more-btn" data-group="women">Show More</button>
    </div>

    <!-- Nhóm Child -->
    <div class="group" id="child">
        <h1 class="title">Child</h1>
        <div class="product-showcase">
            <div class="product-content">
                <img src="./images/facebook.png" alt="T-Shirt" />
                <p class="rotated-text">T-Shirt<br>4000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Shorts" />
                <p class="rotated-text">Shorts<br>3000 ¥</p>
            </div>
            <div class="product-content">
                <img src="./images/facebook.png" alt="Cap" />
                <p class="rotated-text">Cap<br>2000 ¥</p>
            </div>
            <div class="product-content ">
                <img src="./images/facebook.png" alt="Shoes" />
                <p class="rotated-text">Shoes<br>5000 ¥</p>
            </div>
        </div>
        <button class="show-more-btn" data-group="child">Show More</button>
    </div>
</section>

    <script src="./scripts/menu.js"></script>
</body>
</html>
