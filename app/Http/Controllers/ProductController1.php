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
        // dd(request()->all());

        $this->validate($request,[
        'name'=>'required',
         'price'=>'required',
         'description'=>'required',
         'stock'=>'required',
         'product_id'=>'required',
        'image'=>'required',


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
        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('image')->move($destination, $photo);
       

    	 $product= new Product;
    
        $product->name= $request->input('name');
        $product->price= $request->input('price');
        $product->description= $request->input('description');
        $product->stock= $request->input('stock');
        $product->product_id= $request->input('product_id');
        $product->image= $photo;
        

    	 $product->save();



    	 return response()->json([

    	 	"data"=> $product,
    	 	"status"=>"ok"
    	 ]);

         return redirect('/getHome');




    }


    public function getProducts(){
        $product= Product::all();
        // dd($product);
        return view('displayProducts', ['products'=>$product]);
    }

    public function deleteProducts(Request $request){

         try {
                 Product::find($request->id)->delete();
                return response(['status' => 'success',]);

            }catch(Exception $e){
                return response(['status'=>'error']);

            }

    }
    public function editProducts(Request $request){
        $product=Product::find($request->id);
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