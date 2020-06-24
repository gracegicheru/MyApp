 @extends('Layouts.home')
 @section('content')


 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Products</strong>
                                       
                                    </div>
                                    <div class="card-body card-block">
                                         <form id="productsForm" method="post" action="/addProducts" enctype="multipart/form-data">
                                            @csrf
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
                                                    <label for="city" class=" form-control-label">Product Description</label>
                                                     <textarea rows="3" cols="3" class="form-control"
                         placeholder="Product Description" name="description" id="description"></textarea>
                                                </div>

                                                
                <div class="form-group">
            <label class="image">Upload your Product:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>

                                         <div class="form-actions form-group">
                                                <button type="submit" id="submitButton" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script type="text/javascript " src="home/js/products.js "></script>
@endsection