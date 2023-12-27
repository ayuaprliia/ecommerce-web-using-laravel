<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style type="text/css">
    .action-column {
      width: 150px;
    }

    table {
      width: 100%;
      text-align: center;
    }

    th, td {
      text-align: center;
      padding: 10px;
    }

    td.title-column {
      max-width: 300px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: normal;
      word-wrap: break-word;
    }

    td.description-column {
      max-width: 700px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: normal;
      word-wrap: break-word;
    }

    .img_size {
      width: 100%;
      max-width: 200px;
      height: auto;
    }
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

  @include('admin.navbar')
  @include('admin.sidebar')

  <div class="main-panel">
    <div class="content-wrapper">

      @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{session()->get('message')}}
      </div>
      @endif

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body  text-center">
            <h4 class="card-title">All Products</h4>
            <div style="margin: auto; padding-bottom: 30px; padding-top: 20px;">
              <form id="searchForm" action="{{ url('search_product') }}" method="get" class="mb-3">
                @csrf
                <div class="input-group">
                  <input type="text" id="search_product" name="search_product" class="form-control" placeholder="Search Product" value="{{ old('search_product') }}">
                  <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
              </form>
            </div>
            <div class="table-responsive">
              <table class="table table-striped" id="productTable">
                <thead>
                  <tr>
                    <th>PRODUCT TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>QUANTITY</th>
                    <th>CATEGORY</th>
                    <th>PRICE</th>
                    <th>PRODUCT IMAGE</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($product as $product)
                  <tr>
                    <td class="title-column">{{$product->title}}</td>
                    <td class="description-column">{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{!! $product->category !!}</td>
                    <td>Rp. {{number_format($product->price, 0, ',', '.')}}</td>
                    <td>
                      <img class="img_size" src="/product/{{$product->image}}">
                    </td>
                    <td class="action-column">
                      <a class="btn btn-gradient-danger btn-fw" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_product', $product->id)}}"> <i class="fa fa-trash"></i> Delete</a>
                      <a class="btn btn-gradient-dark btn-icon-text" href="{{url('update_product', $product->id)}}"> <i class="mdi mdi-file-check btn-icon-append"></i> Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      @include('admin.script')
      <script>
        $(document).ready(function () {
          // Tangani pengajuan formulir pencarian dengan Ajax
          $('#searchForm').submit(function (e) {
            e.preventDefault();

            $.ajax({
              type: 'GET',
              url: $('#searchForm').attr('action'),
              data: $('#searchForm').serialize(),
              success: function (response) {
                // Mengganti konten tabel dengan hasil pencarian
                $('#productTable tbody').html($(response).find('#productTable tbody').html());
              },
              error: function (error) {
                console.log(error);
              }
            });
          });
        });
      </script>
    </div>
  </div>

</body>

</html>
