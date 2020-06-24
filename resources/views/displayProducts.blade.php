  @extends('Layouts.home')
  @section('content')

  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


   <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->stock}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>
                                                        <button class="item delete" id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript " src="home/js/products.js "></script>

@endsection   
                   