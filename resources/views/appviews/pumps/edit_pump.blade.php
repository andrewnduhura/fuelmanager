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
              <li class="breadcrumb-item"><a href="{{ route('pumps.index') }}">View pumps</a></li>
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
      <form action="{{ route('pumps.update' , $pumps->id) }}" method="post">
      @csrf
    @method("PUT")

    <!-- pump name-->
    <div class="form-group">
    <div class="row">
      <label for="pump_name" class="col-md-3">Product Name</label>
      <div class="col-md-6"><input type ="text" name="pump_name" id="pump_name" 
      class="form-control" value="{{ $pumps->pump_name }}"></div>
    </div>
    </div>
    <!-- identifier-->
    <div class="form-group">
    <div class="row">
      <label for="product_id" class="col-md-3">Identifier</label>
    <select name="product_id" id="product_id" lass="form-control">
        <option value="">Choose product</option>
       @foreach($products as $product)
        <option value="{{ $product->id }}" 
        @if($product->id == $pumps->product_id)
          selected
        @endif
        >{{ $product->product_alias }}</option>
      @endforeach
    </select>
  </div>

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
