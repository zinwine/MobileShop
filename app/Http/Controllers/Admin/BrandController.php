<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Category;
use App\Product;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Product::all();
        $brands = Brand::all();
        $types = Type::all();
        return view('smartphone',compact('brands','products','types','categories'));
    }
    public function accessoryIndex(){
        $products = Product::all();
        $brands = Brand::all();
        return view('accessories',compact('brands','products'));
    }
     public function adminIndex(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.brands.brands',compact('brands','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();
        // return view('admin.brands.add_brand',compact('categories'));
        return view('admin.brands.add_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Brand::create([
                'brand'=>$request->get('name'),
            
        ]);
        return redirect()->back()->with('status','Successfully Created Category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $brands = Brand::all();
            // $showbrand = Brand::find($id);
            $products = Product::all();
            return view('product',compact('id','products','brands'));
       
    }
    public function phoneShow($id)
    {
            $brands = Brand::all();
            $products = Product::where('category_id', 1)->where('brand_id', $id)->get();
            return view('mobile',compact('products','brands'));
       
    }
    public function computerShow($id)
    {
            $brands = Brand::all();
            $products = Product::where('category_id', 2)->where('brand_id', $id)->get();
            return view('computer',compact('products','brands'));
       
    }
    public function accessoriesShow($id)
    {
            $brands = Brand::all();
            $products = Product::where('category_id', 3)->where('brand_id', $id)->get();
            return view('accessories',compact('products','brands'));
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $brandy = Brand::find($id);
        return view('admin.brands.edit_brand',compact('categories','brandy','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->brand = $request->get('name');
        $brand->update();
        return redirect('admin/brand')->with('status','Succefully Edit Brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $brand = Brand::where('id',$id)->firstOrFail();
         $brand->delete();

        return redirect()->back()->with('status','Successfully Deleted Brand');
    }
}
