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
                        <h4 class="card-title">UPDATE CATEGORY</h4>
                        <p class="card-description"> Update the product category </p>

                        <form class="forms-sample" action="{{url('/update_category_confirm', $data->id)}}" method="post" enctype="multipart/form-data">
                       
                        @csrf
                        
                        <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" class="form-control" name="category" placeholder="Write category name" required="" value="{{$data->category_name}}">
                    </div>
                    
                        <button type="submit" class="btn btn-gradient-primary me-2" style="background: linear-gradient(45deg, #b66dff, #8146ff);">Update</button>
                        <a class="btn btn-light" href="{{url('view_category')}}">Cancel  </a>
                    
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
