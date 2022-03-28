@extends('layouts.admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Prices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Current prices</a></li>
              <li class="breadcrumb-item active">Set Price</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    <div class="container-fluid">

    <form method="post" action="{{ route('price.store') }}">
    @csrf

    <div class="form-group">
    <div class="row">
      <label for="price_date" class="col-md-3">Date</label>
      <div class="col-md-6"><input type ="date" name="price_date" id="price_date"              class="form-control"></div> 
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="pump" class="col-md-3">Pump</label>
      <div class="col-md-6">
          <select name="pump" id="pump" class="form-control">
        <option value="">Choose pump</option>
        @foreach($pumps as $pump)
        <option value="{{ $pump->id }}">{{ $pump->pump_name }}</option>
        @endforeach
    </select>
</div>
      <div class="clearfix"></div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">
      <!-- <label for="product_alias" class="col-md-3">Product Identifier</label>
      <div class="col-md-6">
          <select name="product_id" id="product_id" class="form-control">
        <option value="">Product</option>
        @foreach($pumps as $pump)
        <option value="{{ $pump->product_id }}">{{ $pump->product_id }}</option>
        @endforeach
    </select> -->
</div>
      <div class="clearfix"></div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">
      <label for="price" class="col-md-3">New price</label>
      <div class="col-md-6"><input type ="integer" name="price" id="price" class="form-control"></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-froup">
      <div class="row">
        <div class="col-md-6"><input type="submit" class="btn btn-info" value="Set New Price"></div>
      </div>
    </div>

  
</form>

    </div>
    </section>
 </div>

@endsection