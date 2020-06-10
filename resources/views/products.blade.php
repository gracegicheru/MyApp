@extends('layouts.main')
@section('content')

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

<!-- Modal Class -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<form id= productsForm method="post">
      		<meta name="csrf-token" content="{{ csrf_token() }}">
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
            <input type="file" name="file" class="form-control">
          </div>
         </form>
           
      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="saveProducts" class="btn btn-primary">Save Products</button>
      </div>

      </div>
  </div>
</div>
   
                                
                               
                                  <div class="page-body">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic table</h5>
                                            <span>use class <code>table</code> inside table element</span>
                                            <div class="card-header-right">
												<ul class="list-unstyled card-option">
													<li><i class="fa fa-chevron-left"></i></li>
													<li><i class="fa fa-window-maximize full-card"></i></li>
													<li><i class="fa fa-minus minimize-card"></i></li>
													<li><i class="fa fa-refresh reload-card"></i></li>
													<li><i class="fa fa-times close-card"></i></li>
												</ul>
											</div>

                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                          
                           
                            </div>
                        </div>
                        <!-- Main-body end -->

                       
                    </div>
                </div>
            </div>
       
<script type="text/javascript " src="dashboard/assets/js/addproduct.js "></script>

@endsection