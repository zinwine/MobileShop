<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Brand;
use App\Type;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //

    }
    public function adminIndex(){
        $categories = Category::all();
        return view('admin.categories.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        if ($request['value']) {
             $name = $request['value'];       
            Category::create([
            'name'=>$name,
          ]);
        
            return "success";
              
            }else{
                return "erroor";
            }
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categories = Category::all();
        $category = Category::find($id);
        $products = Product::all();
        return view('admin/products/view_product',compact('category','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('admin.categories.category',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $category = Category::find($id);
        $category->name= $request->get('name');       
        $category->update();

        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request['id'];
        $brands = Brand::where('category_id',$id)->get();
        $brand_arr = [];
        foreach ($brands as $brand) {
            $brand_id = $brand->id;
            array_push($brand_arr,$brand_id);
        }
        $products = Product::where('category_id',$id)->get();
        $product_arr = [];
        foreach ($products as $product) {
            $product_id = $product->id;
            array_push($product_arr,$product_id);
        }
        $types = Type::where('category_id',$id)->get();
        $type_arr = [];
        foreach ($types as $type) {
            $type_id = $type->id;
            array_push($type_arr,$type_id);
        }

        Category::destroy($id);
        Brand::destroy($brand_arr);
        Product::destroy($product_arr);
        Type::destroy($type_arr);
        return "success";
    }
}
