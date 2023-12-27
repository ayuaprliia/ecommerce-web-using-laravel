<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  @include('admin.css')

  </head>
  <body>

      <!-- partial -->

      @include('admin.navbar')

      @include('admin.sidebar')

        <!-- partial -->
        
        <!-- partial -->
        
        <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {{session()->get('message')}}
            </div>    

        @endif


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">UPDATE PRODUCT</h4>
                        <p class="card-description"> Update the product </p>

                        <form class="forms-sample" action="{{url('/update_product_confirm', $product->id)}}" method="post" enctype="multipart/form-data">
                       
                        @csrf
                        
                        <div class="form-group">
                        <label for="exampleInputName1">Product Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputName1">Product Description</label>
                        <input type="text" class="form-control" name="description"  placeholder="Write a description" required="" value="{{$product->description}}">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputName1">Product Price</label>
                        <input type="number" class="form-control" name="price"  placeholder="Write a product price" required="" value="{{$product->price}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputName1">Product Quantity</label>
                        <input type="number" min="0" class="form-control" name="quantity"  placeholder="Product Quantity" required="" value="{{$product->quantity}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Category</label>
                        <select class="form-control" name="category" required="">
                            <option value="{{$product->category}}" selected="">{!! $product->category !!}</option>
                            
                            @foreach($category as $category)
                            
                            <option value="{{$category->category_name}}</option>">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Current product image</label>
                        <img height="300" width="300" src="/product/{{$product->image}}">
                    </div>
                    
                    <div class="form-group">
                        <label>Change image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: linear-gradient(45deg, #b66dff, #8146ff);">Upload</button>
                            </span>
                        </div>
                    </div>

                        <button type="submit" class="btn btn-gradient-primary me-2" style="background: linear-gradient(45deg, #b66dff, #8146ff);">Update</button>
                        <a class="btn btn-light" href="{{url('show_product')}}">Cancel</a>
                    
                    </form>
                  </div>
                </div>
              </div>

        @include('admin.script')

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
      $('.file-upload-browse').on('click', function() {
        $('input[type="file"]').click();
      });

      $('input[type="file"]').change(function() {
        $('.file-upload-info').val(this.files[0].name);
      });
    </script>

  </body>
</html>
