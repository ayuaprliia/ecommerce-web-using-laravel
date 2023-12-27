<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        #productCarousel {
            margin: auto;
            max-width: 45%; /* Sesuaikan dengan kebutuhan ukuran carousel */
        }

        #productCarousel img {
            width: 100%;
            height: auto;
        }

        .carousel-inner {
            text-align: center;
        }
        .carousel-item {
            justify-content: center;
        }

        .addproduct-btn{
          max-width: 45%;
          margin:auto;
        }
    </style>
</head>
<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-store"></i>
                    </span> Selamat Datang Admin HAVANA.ID
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
            <div class="col-lg-8">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="admin\assets\images\Screenshot 2023-12-20 173234.png" class="d-block w-100" alt="Product 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="admin\assets\images\Screenshot 2023-12-20 173234.png" class="d-block w-100" alt="Product 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="admin\assets\images\Screenshot 2023-12-20 173255.png" class="d-block w-100" alt="Product 3">
                </div>
                <!-- Add more slides as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="addproduct-btn">
        <a class="btn btn-gradient-primary btn-lg d-block mx-auto" href="{{url('view_product') }}">Add Product</a>
    </div>
</div>
</body>
</html>
