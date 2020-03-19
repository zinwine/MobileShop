<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\Type;

class ProductController extends Controller
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

    public function adminIndex()
    {
        $types = Type::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::all();
        return view('admin.products.product',compact('products','categories','brands','types'));
    }
    public function add(Request $request,$id){
                     $items = array();
                if($request->session()->has('items')){

                    $items = $request->session()->get('items');

                      if(!in_array($id,$items)){
                          array_push($items,$id);
                      }
                }else{
                        array_push($items,$id);

                }

                $request->session()->put('items',$items);

               //$request->session()->flush();

                 $products = Product::all();
        return redirect()->back()->with('products');

    }
    public function cartShow(Request $request){
        $carts = $request->session()->get('items');
        $products = array();

            for($i = 0; $i < count($carts); $i++){

                $product = Product::find($carts[$i]);

                 array_push($products,$product);


            }

            return view('addtocart',compact('products'));



    }
    public function delete($id){
        return "Nothing Delete";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.add_product',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files=$request->file('image');
        $fileAry=array();

        foreach($files as $file){
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$fileName);
                $file->move(public_path().'/uploads/',$fileName);

        }
        Product::create([
                'category_id'=>$request->get('category'),
                'brand_id'=>$request->get('brand'),
                'type_id'=>$request->get('type'),
                'title'=>$request->get('name'),
                'price'=>$request->get('price'),
                'quantity'=>$request->get('quantity'),
                // 'color'=>$request->get('color'),
                'description'=>$request->get('description'),          
                'status'=>$request->get('status'),
                'imgs'=>serialize($fileAry),
        ]); 
        return redirect('admin/product')->with('status','Successfully Created Product Item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       $product = Product::find($id);
       return view('detail',compact('product'));
    }

    public function adminShow($id)
    {   
       $detail = Product::find($id);
       return view('admin/products/view_product',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $types = Type::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::all();
        $product = Product::find($id);
        return view('admin.products.product',compact('product','products','brands','categories','types'));
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
       

        $files=$request->file('image');
        $fileAry=array();

        foreach($files as $file){
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                array_push($fileAry,$fileName);
                $file->move(public_path().'/uploads/',$fileName);

        }
            $product = Product::find($id);
            $product->category_id=$request->get('category');
            $product->brand_id=$request->get('brand');
            $product->type_id=$request->get('type');
            $product->title=$request->get('name');
            $product->price=$request->get('price');
            $product->quantity=$request->get('quantity');
            $product->description=$request->get('description');          
            $product->status=$request->get('status');
            $product->imgs=serialize($fileAry);
            $product->update();
      
        return redirect('admin/product')->with('status','Successfully Edit Product Item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product')->with('status','Successfully Deleted Product');
    }
}
