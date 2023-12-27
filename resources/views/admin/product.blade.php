<!DOCTYPE html>
<html lang="en">
  <head>

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
                        <h4 class="card-title">ADD PRODUCT</h4>
                        <p class="card-description"> Add new products </p>

                        <form class="forms-sample" action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                       
                        @csrf
                        
                        <div class="form-group">
                        <label for="exampleInputName1">Product Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Write a title" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputName1">Product Description</label>
                        <input type="text" class="form-control" name="description"  placeholder="Write a description" required="">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputName1">Product Price</label>
                        <input type="number" class="form-control" name="price"  placeholder="Write a product price" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputName1">Product Quantity</label>
                        <input type="number" min="0" class="form-control" name="quantity"  placeholder="Product Quantity" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Category</label>
                        <select class="form-control" name="category" required="">
                            <option value="" selected disabled>Add a category here</option>
                            
                            @foreach($category as $category)
                            
                            <option value="{{$category->category_name}}</option>">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default" required="">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: linear-gradient(45deg, #b66dff, #8146ff);">Upload</button>
                            </span>
                        </div>
                    </div>

                        <button type="submit" class="btn btn-gradient-primary me-2" style="background: linear-gradient(45deg, #b66dff, #8146ff);">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    
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