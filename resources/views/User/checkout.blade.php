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

    <!-- Main Banner Area Start -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>CART</h2>
                        <span>Explore our collection and add your favorite items to the cart for a convenient shopping experience.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Banner Area End -->

    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <?php $totalprice=0; ?>
                            @foreach($cart as $cartItem)
                                <?php
                                $itemTotal = $cartItem->price * $cartItem->quantity;
                                $totalprice += $itemTotal;
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="img_size">
                                            <img src="product/{{$cartItem->image}}" alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{$cartItem->product_title}}</h2>
                                        </td>
                                        <td>Rp{{number_format($cartItem->price, 0, ',', '.')}}</td>
                                        <td>
                                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-black decrease" type="button" data-id="{{$cartItem->id}}">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center quantity-amount" data-id="{{$cartItem->id}}" value="{{$cartItem->quantity}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-black increase" type="button" data-id="{{$cartItem->id}}">&plus;</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Rp<span class="item-total" id="item-total-{{$cartItem->id}}">
                                                {{number_format($itemTotal, 0, ',', '.')}}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{url('/remove_cart', $cartItem->id)}}" class="btn btn-black btn-sm" onclick="return confirm('Are you sure to remove this product?')">X</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black" id="cart-total">Rp{{number_format($totalprice, 0, ',', '.')}}</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</button>
                                </div>
                            </div>
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
            $(".increase, .decrease").on("click", function () {
                var itemId = $(this).data("id");
                var quantityInput = $(".quantity-amount[data-id='" + itemId + "']");
                var currentQuantity = parseInt(quantityInput.val());

                // Increment or decrement quantity based on button clicked
                if ($(this).hasClass("increase")) {
                    currentQuantity++;
                } else {
                    currentQuantity = Math.max(1, currentQuantity - 1);
                }

                // Update quantity input
                quantityInput.val(currentQuantity);

                // Send Ajax request to update quantity and total
                $.ajax({
                    type: "POST",
                    url: "/update-cart",
                    data: {
                        _token: "{{ csrf_token() }}",
                        itemId: itemId,
                        quantity: currentQuantity
                    },
                    success: function (data) {
                        // Update item total and cart total on success
                        $("#item-total-" + itemId).text(data.itemTotal);
                        $("#cart-total").text(data.cartTotal);
                    }
                });
            });

// get data from database using AJAX
$.ajax({
    type: "GET",
    url: "/get-customer-data", 
    success: function (customerData) {
        // customerData 
        var customerName = customerData.name;
        var customerAddress = customerData.address;
        var customerPhone = customerData.phone;

        console.log("Nama: " + customerName);
        console.log("Alamat: " + customerAddress);
        console.log("Nomor Telepon: " + customerPhone);

    },
    error: function (error) {
        console.error("Error fetching customer data:", error);
    }
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
