<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HAVANA - HOME</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/shop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
   @include('User.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Havana</h4>
                                <span></span>
                                <div class="main-border-button">
                                    <a href="{{url('products')}}">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Shoulder Bag</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Shoulder Bag</h4>
                                                <p>An elegant and classy look.</p>
                                                <div class="main-border-button">
                                                    <a href="{{url('shoulder')}}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="productimage/GUCCI 3.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sling Bag</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Sling Bag</h4>
                                                <p>Simple and elegant make it trendy</p>
                                                <div class="main-border-button">
                                                    <a href="{{url('sling')}}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="productimage/PRADA SLING BAG.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Tote Bag</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Tote Bag</h4>
                                                <p>A Perfect Choice for Daily Use</p>
                                                <div class="main-border-button">
                                                    <a href="{{url('tote')}}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="productimage/CHANEL TOTEBAG.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>See All</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>All Products</h4>
                                                <p>Discover All of Our Products</p>
                                                <div class="main-border-button">
                                                    <a href="{{url('products')}}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="productimage/GUCCII 6.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


>

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>Experience the beauty of self-expression through fashion, embracing every moment as an opportunity to showcase your individuality and unique style. With our diverse range of offerings, discover the joy of curating a wardrobe that truly embodies your essence and personality.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Fashion is a way to say who you are without having to speak.</p>
                        </div>
                        <p>Discover a diverse collection of high-quality products designed to complement your lifestyle. From modern to classic styles, each item is carefully chosen to provide a special touch in your daily life. Explore our best selections and find products that are not only functional but also bring true satisfaction to your lifestyle.</p>
                        <div class="main-border-button">
                            <a href="{{url('products')}}">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Follow our social media to see our newest collection</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/PRADA TOTE BAG.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/sm2.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/SLINGBAG.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/sosmed 1.webp" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/GUCCII 6.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com/havana.bag/">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="productimage/sosmed.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    @include('User.footer')
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>