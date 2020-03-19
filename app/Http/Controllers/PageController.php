<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Type;
use App\Product;
use App\Brand;
class PageController extends Controller
{
    function index(){
    	$products = Product::all();
        return view('home1',compact('products'));
        // return view('home1');
    }
    function show($id){
    	$types = Type::all();
        $category = Category::find($id);
        $products = Product::all();
        $brands = Brand::all();
        return view('mobile',compact('category','types', 'products', 'brands'));
    }
    function phone(){
        // $types = Type::all();
        $products = Product::where('category_id', 1)->get();
        $brands = Brand::all();
        return view('mobile',compact('products', 'brands'));
    }
    function computer(){
        $types = Type::all();
        $products = Product::where('category_id', 2)->get();
        $brands = Brand::all();
        return view('computer',compact('types', 'products', 'brands'));
    }
    function accessories(){
        $types = Type::all();
        $products = Product::where('category_id', 3)->get();
        $brands = Brand::all();
        return view('mobile',compact('types', 'products', 'brands'));
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function login(){
        return view('login');
    }
    function detail($id){
        $product = Product::find($id);
        return view('detail', compact('product'));
    }
}
