<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function ProductView(){
    	$product_id= "PR".time();
    	return view('products', ['product_id'=>$product_id]);
    }

  
    public function AddProducts(Request $request){

    	$details= request()->validate([
    		'name'=>'required',
    		'price'=>'required',
    		'description'=>'required',
    		'stock'=>'required',
    		'product_id'=>'required'

    	]);

    	 $product= new Product;
    	 $product->name= $details['name'];
    	 $product->price= $details['price'];
    	 $product->description= $details['description'];
    	 $product->stock= $details['stock'];
    	 $product->product_id= $details['product_id'];

    	 $product->save();

    	 return response()->json([

    	 	"data"=> $product,
    	 	"status"=>"ok"
    	 ]);






    }
}
