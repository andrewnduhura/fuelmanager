@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('products.index') }}">View products</a></li>
              <li class="breadcrumb-item active">Masters</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

       <!-- Main content -->
    <!--Main body/contect on Add product log-->
    <section class="content">
      <div class="container-fluid">
      <form action="{{ route('products.update' , $products->id) }}" method="post">
      @csrf
    @method("PUT")

    <!-- product name-->
    <div class="form-group">
    <div class="row">
      <label for="pname" class="col-md-3">Product Name</label>

      <div class="col-md-6"><input type ="text" name="product_name" id="product_name" 
      class="form-control" value="{{ $products->product_name }}"></div>
    </div>
    </div>
    <!-- identifier-->
    <div class="form-group">
    <div class="row">
      <label for="identifier" class="col-md-3">Identifier</label>
      <div class="col-md-6"><input type ="text" name="product_alias" id="product_alias" 
    class="form-control" value="{{ $products->product_alias }}"></div>
      <div class="clearfix"></div>
    </div>
    </div>
    <div class="form-froup">
      <div class="row">
        <div class="col-md-6"> <input type="submit" class="btn btn-info" value="Save Product"></div>
      </div>
    </div>

  </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection