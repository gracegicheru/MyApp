<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    //
    public function displayProducts(){
    	$product_id= "PR".time();
    	$products= Product::all();
    	return view('products1', ['product_id'=>$product_id],['products'=>$products]);
    }
    public function AddProducts(Request $request){
    	 $data= request()->validate([
        'name'=>'required',
         'price'=>'required',
         'description'=>'required',
         'stock'=>'required',
         'product_id'=>'required',
        // 'image'=>'required',

        ]);

    	      // if($request->hasFile('image')){

            // $fileNameWithExt= $request->file('image')->getClientOriginalName();
            // $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // $extension=$request->file('image')->getClientOriginalExtension();
            // $fileNameToStore= $fileName.'_'.time().'.'.$extension;
            // // $fileNameToStore=time().'.'.$request->image->getClientOriginalExtension();
            // $path=$request->file('image')->storeAs('public/images', $fileNameToStore);
         // }else{
         //    $fileNameToStore='noimage.png';


         // }


    	 $product= new Product;
    
        $product->name= $data['name'];
        $product->price= $data['price'];
        $product->description= $data['description'];
        $product->stock= $data['stock'];
        $product->product_id= $data['product_id'];
        // $product->image= $fileNameToStore;
        

    	 $product->save();

    	  // if ($data->fails())
       //  {
       //      return response()->json(["data"=>$data->errors()->all()]);
       //  }

    	 return response()->json([

    	 	"data"=> $product,
    	 	"status"=>"ok"
    	 ]);
    	   


    }
        public function deleteProducts(Request $request){
        try {
            Product::find($request->delId)->delete();
            return response(['status' => 'success',]);

        }catch(Exception $e){
            return response(['status'=>'error']);

        }


    }
    public function editProducts(Request $request){


        $product=Product::find($request->id);
        // dd($product);
        $product->name= $request->input('name1');
        $product->price= $request->input('price1');
        $product->description= $request->input('description1');
        $product->stock= $request->input('stock1');
        

        $product->save();
  
        return response()->json([
            'status'=>'ok'
        ]);




    }
}
