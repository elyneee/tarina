<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Home</title>

</head>

<body>
    <?php include "menu.php"; ?>

    <div class="banner">
        <div>
            <img src="img/banner1.png" alt="Big Sale 70% OFF">
        </div>
        <div>
            <img src="img/banner2.png" alt="Suit Collection">
        </div>
        <div>
            <img src="img/banner3.png" alt="Tiny Tales Coming Soon">
        </div>
        <div>
            <img src="img/banner4.png" alt="Knitwear Collection">
        </div>
        <div>
            <img src="img/banner5.png" alt="Popup Store">
        </div>
    </div>

    <h1>CATEGORY</h1>
    <div class="category">
        <div class="category-item">
            <img src="img/tops.png" alt="Tops">
            <p>Tops</p>
        </div>
        <div class="category-item">
            <img src="img/bottoms.png" alt="Bottoms">
            <p>Bottoms</p>
        </div>
        <div class="category-item">
            <img src="img/onepieces.png" alt="Onepieces">
            <p>Onepieces</p>
        </div>
        <div class="category-item">
            <img src="img/sleepwear.png" alt="Onesets">
            <p>Onesets</p>
        </div>
        <div class="category-item">
            <img src="img/bags.png" alt="Bags">
            <p>Bags</p>
        </div>
        <div class="category-item">
            <img src="img/footwear.png" alt="Footwear">
            <p>Footwear</p>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.banner').slick({
                fade: true,
                autoplay: true,
                autoplaySpeed: 2000
            });
        });
    </script>
</body>


</html>