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
          <h1>Add Product</h1>
          <small>Product list</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="clist.html"> 
                      <i class="fa fa-list"></i>  Product List </a>  
                   </div>
                </div>
                <div class="panel-body">
                   <form class="col-sm-6" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
           			@csrf
                      <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" placeholder="Enter Product Name" name="name" required>
                      </div>
                      <div class="form-group">
                         <label>Code</label>
                         <input type="text" class="form-control" placeholder="Enter Product Code" name="code" required>
                      </div>
                      <div class="form-group">
                         <label>Color</label>
                         <input type="text" class="form-control" placeholder="Enter Product Color" name="color" required>
                      </div>
                      <div class="form-group">
                         <label>Description</label>
                         <textarea name="description" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                         <label>Price</label>
                         <input type="number" class="form-control" placeholder="Enter Product Price" required>
                      </div>
                      <div class="form-group">
                         <label>Picture upload</label>
                         <input type="file" name="image">
                      </div>
                      <div class="form-check">
                         <label>Status</label><br>
                         <label class="radio-inline">
                         <input type="radio" name="status" value="1" checked="checked">Active</label>
                         <label class="radio-inline"><input type="radio" name="status" value="0" >Inactive</label>
                      </div>
                      <div class="reset-button">
                         <button class="btn btn-warning" type="submit" onclick="event.preventDefault();">Reset</button>
						 <button class="btn btn-success" type="submit">Save</button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection