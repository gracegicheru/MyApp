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
        // dd(request()->all());
        // dd($request->hasFile('image')!=null);
        // $photo = $request->filled('image');
        // dd($photo);
        // $extension = $request->file('image');
        // dd($extension);
       // dd($request->filled('image'));

    	 $data= request()->validate([
        'name'=>'required',
         'price'=>'required',
         'description'=>'required',
         'stock'=>'required',
         'product_id'=>'required',
        'image'=>'required',

        ]);

    $photo = $request->file('image');
    $extension = $photo->getClientOriginalExtension();
    Storage::disk('public')->put($photo->getFilename().'.'.$extension,  File::get($photo));

          // if($request->filled('image')){


          //   $fileNameWithExt= $request->filled('image')->getClientOriginalName();
          //   $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          //   $extension=$request->filled('image')->getClientOriginalExtension();
          //   $fileNameToStore= $fileName.'_'.time().'.'.$extension;
          //   // $fileNameToStore=time().'.'.$request->image->getClientOriginalExtension();
          //   $path=$request->filled('image')->storeAs('public/images', $fileNameToStore);
        
       

    	 $product= new Product;
    
        $product->name= $data['name'];
        $product->price= $data['price'];
        $product->description= $data['description'];
        $product->stock= $data['stock'];
        $product->product_id= $data['product_id'];
        $product->mime = $photo->getClientMimeType();
        $product->original_filename = $photo->getClientOriginalName();
        $product->filename = $photo->getFilename().'.'.$extension;
        // $product->image=$fileNameToStore;        

    	 $product->save();



    	
    	 return response()->json([

    	 	"data"=> $product,
    	 	"status"=>"ok"
    	 ]);

         // }

    	   


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
