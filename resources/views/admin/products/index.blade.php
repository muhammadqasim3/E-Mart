@extends('layouts.admin.app')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-users"></i>
       </div>
       <div class="header-title">
          <h1>Products</h1>
          <small>Product List</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>Products</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                         <a class="btn btn-add" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> Add Product
                         </a>  
                      </div>
                      <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                      <ul class="dropdown-menu exp-drop" role="menu">
                         <li>
                            <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                            <img src="{{ asset('admin_assets/dist/img/csv.png') }}" width="24" alt="logo"> CSV</a>
                         </li>
                         <li>
                            <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                            <img src="{{ asset('admin_assets/dist/img/pdf.png') }}" width="24" alt="logo"> PDF</a>
                         </li>
                      </ul>
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="productDatatable" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>Name</th>
                               <th>Code</th>
                               <th>Color</th>
                               <th>Image</th>
                               <th>Price</th>
                               <th>Status</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                         	@foreach($products as $product)
	                            <tr>
	                               <td>{{ $product->name }}</td>
	                               <td>{{ $product->code }}</td>
	                               <td>{{ $product->color }}</td>
	                               <td><img src="{{ asset('uploads/products/'.$product->image ) }}" class="img-circle" alt="Product Image" width="50" height="50"></td>
	                               <td>$20</td>
	                               <td><span class="label-custom label label-default">Active</span></td>
	                               <td>
	                                  <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
	                                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
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
    </section>
    <!-- /.content -->
 </div>
  <!-- ./wrapper -->

@endsection

@push('scripts')
	<script type="text/javascript">
		$(document).ready( function () {
   			$('#productDatatable').DataTable();
		});
	</script>
@endpush