<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

class AdminController extends Controller
{

    // CATEGORY
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');

    }

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Category Delete Successfully');
    }

    public function update_category($id)
    {
        $data=category::find($id);
        return view('admin.update_category', compact('data'));
    }



    public function update_category_confirm(Request $request, $id)
    {
        $data=category::find($id);
        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Update Successfully');
    }

    public function search_category(Request $request)
    {
        $searchCategory = $request->input('search_category');
    
        // Query sesuai dengan kebutuhan Anda
        $data = category::where('category_name', 'like', '%' . $searchCategory . '%')
            ->get();
    
        return view('admin.category', compact('data'));
    }





    // PRODUCT
    
    public function view_product()
    {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

    
    public function add_product(Request $request)
    {
       $product=new product;

       $product->title=$request->title;
       $product->description=$request->description;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $product->category=$request->category;
       
       
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('product', $imagename);

       $product->image=$imagename;


       $product->save();

       return redirect()->back()->with('message', 'Product Added Succesfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();

        return redirect()->back()->with('message', 'Product Delete Successfully');
    }

    public function update_product($id)
    {
        $product=product::find($id);
        $category=category::all();
        return view('admin.update_product', compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        
        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product' ,$imagename);
    
            $product->image=$imagename;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product Update Successfully');
    }

    public function search_product(Request $request)
    {
        $searchProduct = $request->input('search_product');
    
        // Query sesuai dengan kebutuhan Anda
        $product = Product::where('title', 'like', '%' . $searchProduct . '%')
            ->orWhere('description', 'like', '%' . $searchProduct . '%')
            ->get();
    
        return view('admin.show_product', compact('product'));
    }
}

