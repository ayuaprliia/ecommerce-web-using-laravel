<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')

<style type="text/css">

    .title 
    {
        color:purple; 
        padding-top: 25px; 
        font-size: 75px;
    }

    label
    {
      display: inline-block;
      width: 200px;
    }


</style>

  </head>
  <body>

      <!-- partial -->

      @include('admin.navbar')

      @include('admin.sidebar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">
                <h1 class="title">ADD NEW PRODUCT</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        
        <button type="button" class="clos" data-dismiss="alert"></button>

        {{session()->get('message')}}

        </div>

        @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

            <div style="padding:15px;">
                <label>Product Title</label>

                <input style="color:black;" type="text" name="title" placeholder="Give a product title" required="">
            </div>

            <div style="padding:15px;">
                <label>Price</label>

                <input style="color:black;" type="number" name="price" placeholder="Give a price" required="">
            </div>

            <div style="padding:15px;">
                <label>Description</label>

                <input style="color:black;" type="text" name="des" placeholder="Give a description" required="">
            </div>

            <div style="padding:15px;">
                <label>Quantity</label>

                <input style="color:black;" type="text" name="quantity" placeholder="Product Quantity" required="">
            </div>

            <div style="padding:15px;">
                <input type="file" name="file">
            </div>

            <div style="padding: 15px;">
                <button class="btn btn-success" type="submit" style="background-color: #4CAF50; color: white; border: 1px solid #4CAF50;"> 
                    <i class="fas fa-check"></i> Submit
                </button>
            </div>

        </form>


            </div>

        </div>

          <!-- partial -->

          @include('admin.script')

  </body>
</html>



$data=new product;

$image=$request->file;

$imagename=time().'.'.$image->getClientOriginalExtension();

$request->file->move('productimage', $imagename);






$data->title=$request->title;

$data->price=$request->price;

$data->descripsion=$request->des;

$data->quantity=$request->quantity;

$data->image=$imagename;


$data->save();


return redirect()->back()->with('message', 'Product Added Successfully');