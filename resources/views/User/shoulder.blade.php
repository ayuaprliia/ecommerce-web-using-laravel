<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HAVANA - SHOULDER BAG</title>


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


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <br></br>
                        <h2>SHOULDER BAG</h2>
                        <span>Make your style trendy with our collection</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">

            @php $productCount = 0; @endphp

                @foreach($product as $product)
                    @php $productCount++; @endphp

                @if($product->category == 'Shoulder Bag</option>')
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                            <ul>
                                <li><a href="{{url('single', $product->id)}}"><i class="fa fa-eye"></i></a></li>
                            </ul>
                            </div>
                            <img src="product/{{$product->image}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{$product->title}}</h4>
                                    <span>Rp. {{number_format($product->price, 0, ',', '.')}}</span>
                        </div>
                    </div>
                </div>
                @endif

                @if ($productCount % 3 == 0)
                        </div>
                        <div class="row">
                    @endif
            @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
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
