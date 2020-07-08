@extends('Layouts.home')

@section('content')

 <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <h3 class="title-5 m-b-35">The Products</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">


                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>Add A Product</button>

                                    </div>
                                </div>

                                   <table class="table table-borderless table-data3">
                                    <thead>
                                     <tr>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Stock</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                    <tr id="tr{{$product->id}}" >
                                        <td>{{$product->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->stock}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>
                                            <div class="table-data-feature">

                                                <button class="item" data-placement="top" title="Edit" data-toggle="modal" id="{{$product->id}}" data-target="#mediumModal2"  onclick="return editProducts('{{ $product->name}}','{{ $product->price}}','{{ $product->description}}','{{ $product->stock}}','{{$product->id}}')">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item deleteProduct" data-toggle="tooltip" id="del{{ $product->id}}" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                               
                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach



                                    </tbody>
                                </table>



</div>
</div>
</div>
</div>
</div>

   <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal">
                        <div class="col-lg-11">
                        <div class="card">
                            <div class="card-header">Add A Product</div>
                            <div class="card-body card-block">
                            	<div class="alert alert-danger" style="display:none"></div>

                                <form action="/addProducts"  method="post" id="productsForm" eenctype="multipart/form-data">

                                	 <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">                               
                                            <div class="form-group">
                                            <label for="product_name" class=" form-control-label">Product Name</label>
                                            <input type="text" id="name" name="name" placeholder="Enter your Product Name" class="form-control">
                                        </div>
                                      <div class="form-group">
                                            <label for="product_price" class=" form-control-label">Product Price</label>
                                            <input type="text" id="price" name="price" placeholder="Enter the Product Price" class="form-control">
                                        </div>
                                    
                                    <div class="form-group">
                                            <label for="product_stock" class=" form-control-label">Product Stock</label>
                                            <input type="text" id="stock" name="stock" placeholder="Enter No of Product Items" class="form-control">
                                        </div>
                                                    <div class="form-group">
                                                    <label for="description" class=" form-control-label">Product Description</label>
                                                     <textarea rows="3" cols="3" class="form-control"
                         placeholder="Product Description" name="description" id="description"></textarea>
                                                </div>
                                        <div class="form-group">
            <label class="image">Upload your Product:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
                                    <div class="form-actions form-group">
                                                <button type="submit" id="submitButton" class="btn btn-success btn-sm">Add products</button>
                                            </div>
                                        </div>
                                   
                                </form>

                                
                            </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


           <div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal">
                        <div class="col-lg-11">
                            <div class="card">
                                <div class="card-header">Edit the Product's details</div>
                                <div class="card-body card-block">
                                    <form action=""  method="post" id="editProductsForm" enctype="multipart/form-data">
                                    	<meta name="csrf-token" content="{{ csrf_token() }}">
                                           <div class="form-group">
                                            <label for="product_name" class=" form-control-label">Product Name</label>
                                            <input type="text" id="name1" name="name1" placeholder="Enter your Product Name" class="form-control">
                                        </div>
                                       <div class="form-group">
                                            <label for="product_price" class=" form-control-label">Product Price</label>
                                            <input type="text" id="price1" name="price1" placeholder="Enter the Product Price" class="form-control">
                                        </div>
                                    
                                       <div class="form-group">
                                            <label for="product_stock" class=" form-control-label">Product Stock</label>
                                            <input type="text" id="stock1" name="stock1" placeholder="Enter No of Product Items" class="form-control">
                                        </div>

                                         <div class="form-group">
                                                    <label for="description" class=" form-control-label">Product Description</label>
                                                     <textarea rows="3" cols="3" class="form-control"
                         placeholder="Product Description" name="description1" id="description1"></textarea>
                                                </div>
                               <div class="form-group">
            <label class="image">Upload your Product:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
                   
                                        <div class="form-actions form-group">
                                            <input type="hidden" id="id" name="id" class="form-control">
                                            <button type="submit" class="btn btn-success btn-sm submitEditBtn" >Update Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


<script type="text/javascript " src="home/js/newproduct.js "></script>


@endsection