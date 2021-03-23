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
          <h1>Add Banner</h1>
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
                      <a class="btn btn-add " href="{{ route('banners.index') }}"> 
                      <i class="fa fa-list"></i>  Banners List </a>  
                   </div>
                </div>
                <div class="panel-body">

                  <!-- Form Start -->
                   <form class="col-sm-6" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
           			      @csrf

                      @include('admin.banners.form')
                      <div class="reset-button">
                         <button class="btn btn-warning" type="submit" onclick="event.preventDefault();">Reset</button>
						            <button class="btn btn-success" type="submit">Save</button>
                      </div>
                   </form>
                  <!-- Form End here -->


                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection