@extends('layouts.admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Sales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="">All sales</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    <div class="container-fluid">

    <form method="post" action="{{ route('sales.store') }}">
    @csrf

    <div class="form-group">
    <div class="row">
      <label for="saleDay" class="col-md-3">Date</label>
      <div class="col-md-6"><input type ="date" name="saleDay" id="saleDay" 
        class="form-control" value="<?php echo date('Y-m-d') ?>" required></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="pump" class="col-md-3">Pump</label>
      <div class="col-md-6">
      <select name="pump" id="pump" class="form-control" required>
        <option value="">Select Pump</option>
        @foreach($sales as $pump)
        <option value="{{ $pump->id }}">{{ $pump->pump_name }}</option>
        @endforeach
    </select></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="shift" class="col-md-3">Shift</label>
      <div class="col-md-6">
      <select name="shift" id="shift" class="form-control" required>
        <option value="">Select Shift</option>
        @foreach($shifts as $shift)
        <option value="{{ $shift->shift_id }}">{{ $shift->shift }}</option>
        @endforeach
        <!-- <input type="hidden" value="" -->
    </select></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="product" class="col-md-3">Product</label>
      <div class="col-md-6">
      <select name="product" id="product" class="form-control" required>
        <option value="">Select Product</option>
        @foreach($sales as $product)
        <option value="{{ $product->product_id }}">{{ $product->product_alias }}</option>
        @endforeach
        
    </select></div>
      <div class="clearfix"></div>
    </div>
    </div>
    

    <div class="form-group">
    <div class="row">
      <label for="price" class="col-md-3">Price</label>
      <div class="col-md-6"><input type ="text" name="price" id="price" class="form-control" required></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <!-- <div class="form-group">
    <div class="row">
      <label for="employee" class="col-md-3">Pump attendant</label>
      <div class="col-md-6"><input type ="text" name="employee" id="employee" class="form-control" required></div>
      <div class="clearfix"></div>
    </div>
    </div> -->

    <div class="form-group">
    <div class="row">
      <label for="open" class="col-md-3">Opening meter</label>
      <div class="col-md-6"><input type ="text" name="open" id="open" class="form-control" required></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="close" class="col-md-3">Closing meter</label>
      <div class="col-md-6"><input type ="text" name="close" id="close" class="form-control" required></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="rtt" class="col-md-3">RTT</label>
      <div class="col-md-6"><input type ="text" name="rtt" id="rtt" class="form-control" ></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-froup">
      <div class="row">
        <div class="col-md-6"><input type="submit" class="btn btn-info" value="Add sale"></div>
      </div>
    </div>

  
</form>

    </div>
    </section>
 </div>


@endsection