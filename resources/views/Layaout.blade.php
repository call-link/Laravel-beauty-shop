<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه</title>
    <!-- style link -->
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">


    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CDN font awsom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- header section start -->

    <header class="header gradient-border">

        <a href="#" class="logo">
            <img src="{{ asset('img/logo_6.jpg') }}" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#products">Products</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
            <a href="#blogs">Blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-cont">
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="{{ asset('img/pro_7.jpg') }}" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">$15.99</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="{{ asset('img/pro_8.jpg') }}" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">$15.99</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="{{ asset('img/pro_9.jpg') }}" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">$15.99</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="{{ asset('img/pro_10.jpg') }}" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">$15.99</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>

    </header>

    <!-- header section end -->

    @yield('content')

    <!-- contact us sec start -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26574.23731954794!2d46.39340808287466!3d33.63695457233523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ffb4cb218c3175d%3A0xa3b82da0b34789a4!2sIlam%2C%20Ilam%20Province%2C%20Iran!5e0!3m2!1sen!2sca!4v1703806414244!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="text" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="text" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>


    </section>

    <!-- contact us sec end -->


    <!-- blogs section sratr -->

    <!-- <section class="blogs" id="blogs">

<h1 class="heading">
    our
    <span>blogs</span>
</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="../Assets/img/bac_3.jpg" alt="">
        </div>
        <div class="content">
            <a href="" class="title">Loving nature and your skin</a>
            <span>by admin / 1copertino , 2023</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Assets/img/bac_4.jpg" alt="">
        </div>
        <div class="content">
            <a href="" class="title">Loving nature and your skin</a>
            <span>by admin / 1copertino , 2023</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Assets/img/bac_15.jpg" alt="">
        </div>
        <div class="content">
            <a href="" class="title">Loving nature and your skin</a>
            <span>by admin / 1copertino , 2023</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </div>

</div>

</section> -->

    <!-- blogs section end -->


    <!-- footer section start -->

    <section class="footer">

        <div class="shar">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">blogs</a>
        </div>


    </section>

    <!-- footer section end -->

    <!-- js file link -->
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>