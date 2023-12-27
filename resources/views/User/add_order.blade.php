<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .img_size {
            width: 200px;
            height: 200px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>HAVANA - CART</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Start -->
    @include('User.header')
    <!-- Header Area End -->

    <!-- Main Banner Area End -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <br></br>
                        <h2>PAYMENT</h2>
                        <span></span>
                        <span></span>
                        <span>Please do payment in whatsapp account</span>
                        <span></span>
                        <span></span>
                        <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</button>
                                    <!-- onclick="window.location='checkout.html'" -->
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer Start -->
    @include('User.footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        // Event listener for "Proceed To Checkout" button
        $(".btn-block").on("click", function () {
            // Customize WhatsApp message
            var whatsappNumber = "6283114688989";
            var whatsappMessage = "Hi, saya ingin melakukan pembayaran";

            // Create WhatsApp link
            var whatsappLink = "https://wa.me/" + whatsappNumber + "/?text=" + encodeURIComponent(whatsappMessage);

            // Redirect to WhatsApp link
            window.location.href = whatsappLink;
        });
    });
</script>




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
</body>
</html>