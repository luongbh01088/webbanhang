<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm - LuongTrancuto</title>
    <link rel="stylesheet" href="../css/products.css"> <!-- Đường dẫn CSS -->
</head>
<body>
    <a href="home.php">← Quay về trang chủ</a>
    <h1>Chi tiết sản phẩm</h1>

    <div class="product">
        <label for="img1">
            <img src="https://icommerceonweb.com/wp-content/uploads/2020/04/114855/contemporary-nike-air-max-90-major-athletic-sneakers-mens-grey-shaded-all-sizes-1024x918.png" alt="Giày Nike Air Max">
        </label>
        <h2>Giày Nike Air Max</h2>
        <p>Giá: 2.500.000đ</p>
    </div>

    <div class="product">
        <label for="img2">
            <img src="https://bizweb.dktcdn.net/100/413/756/files/3-04ed004c-52c9-41c1-9ebd-b31b52ec7abf.jpg?v=1687435156400" alt="Giày Sneaker X">
        </label>
        <h2>Giày Sneaker X</h2>
        <p>Giá: 2.300.000đ</p>
    </div>

    <div class="product">
        <label for="img3">
            <img src="https://tse2.mm.bing.net/th/id/OIP.Hz0oARLOpoJJrPUvv_xrwAHaFj?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Giày Adidas">
        </label>
        <h2>Giày Adidas</h2>
        <p>Giá: 2.500.000đ</p>
    </div>

    <!-- Checkbox ẩn để mở popup -->
    <input type="checkbox" id="img1" class="popup-toggle">
    <div class="popup">
        <label for="img1" class="overlay"></label>
        <img src="https://icommerceonweb.com/wp-content/uploads/2020/04/114855/contemporary-nike-air-max-90-major-athletic-sneakers-mens-grey-shaded-all-sizes-1024x918.png">
    </div>

    <input type="checkbox" id="img2" class="popup-toggle">
    <div class="popup">
        <label for="img2" class="overlay"></label>
        <img src="https://bizweb.dktcdn.net/100/413/756/files/3-04ed004c-52c9-41c1-9ebd-b31b52ec7abf.jpg?v=1687435156400">
    </div>

    <input type="checkbox" id="img3" class="popup-toggle">
    <div class="popup">
        <label for="img3" class="overlay"></label>
        <img src="https://tse2.mm.bing.net/th/id/OIP.Hz0oARLOpoJJrPUvv_xrwAHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    </div>
</body>
</html>
