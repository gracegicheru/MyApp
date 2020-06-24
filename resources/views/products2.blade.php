@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="home/css/bootstrap.min.css" />


                 <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
									<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <button class="btn btn-primary btn-round" style="float:right;"  data-toggle="modal" data-target="#exampleModal">Add Products</button> 
                                        </div>
                                    </div>


     
      	<form id= productsForm method="post">
      		<meta name="csrf-token" content="{{ csrf_token() }}" enctype="multipart/form-data">
      		<input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">
          <div class="input-group">
               <input type="text" class="form-control" placeholder="Product Name" name="name" id="name">
                            <span class="md-line"></span>
             </div>
           <div class="input-group">
               <input type="text" class="form-control" placeholder="Product Price" name="price" id="price">
                            <span class="md-line"></span>
             </div>
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Product Stock" name="stock" id="stock">
                            <span class="md-line"></span>
             </div>
            <div class="input-group">
               <textarea rows="5" cols="5" class="form-control"
                         placeholder="Product Description" name="description" id="description"></textarea>
             </div>

                     <div class=" col-form-label">
            <label class="mr-2">Upload your Product:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
         </form>
           
     




                        </div>
                        <!-- Main-body end -->

                       
                    </div>
                </div>
            </div>
       
<script type="text/javascript " src="dashboard/assets/js/addproduct.js "></script>
<script src="home/js/jquery.min.js"></script>
<script src="home/js/bootstrap.min.js"></script> 
<script src="home/js/jquery.dataTables.min.js"></script> 
<script src="home/js/matrix.tables.js"></script>


@endsection