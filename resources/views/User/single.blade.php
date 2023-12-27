<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HAVANA - DETAIL</title>


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
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Discover unique and trendy styles with our latest products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="product/{{$product->image}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$product->title}}</h4>
                    <span>Rp. {{number_format($product->price, 0, ',', '.')}}</span>
                    <span>{{$product->description}}</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Fashion is a way to say who you are without having to speak.</p>
                    </div>

                    <form action="{{url('add_cart', $product->id)}}" method="post">
                        @csrf

                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="number" name="quantity" value="1" min="1" class="input-text qty text" size="4" pattern="" inputmode="">
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Rp{{number_format($product->price, 0, ',', '.')}}</h4>
                            <div class="main-border-button"><input type="submit" value="Add To Cart" ></div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
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

        Rp(function() {
            var selectedClass = "";
            Rp("p").click(function(){
            selectedClass = Rp(this).attr("data-rel");
            Rp("#portfolio").fadeTo(50, 0.1);
                Rp("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              Rp("."+selectedClass).fadeIn();
              Rp("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>