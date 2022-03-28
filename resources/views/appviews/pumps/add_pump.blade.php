@extends('layouts.admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pumps</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('pumps.index') }}">Pumps</a></li>
              <li class="breadcrumb-item active">Add Pumps</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    <div class="container-fluid">

    <form method="post" action="{{ route('pumps.store') }}">
    @csrf

    <div class="form-group">
    <div class="row">
      <label for="pump_name" class="col-md-3">Pump Name</label>
      <div class="col-md-6"><input type ="text" name="pump_name" id="pump_name" class="form-control"></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="product_alias" class="col-md-3">Product Identifier</label>
      <div class="col-md-6">
          <select name="product_id" id="product_id" class="form-control">
        <option value="">Choose product</option>
        @foreach($products as $prdct)
        <option value="{{ $prdct->id }}">{{ $prdct->product_alias }}</option>
        @endforeach
    </select>
</div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-froup">
      <div class="row">
        <div class="col-md-6"><input type="submit" class="btn btn-info" value="Add Pump"></div>
      </div>
    </div>

  
</form>

    </div>
    </section>
 </div>

@endsection