@extends('layouts.admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Masters</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('shifts.index') }}">View Shifts</a></li>
              <li class="breadcrumb-item active">Add shifts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    <div class="container-fluid">

    <form method="post" action="{{ route('shifts.store') }}">
    @csrf

    <div class="form-group">
    <div class="row">
      <label for="shift" class="col-md-3">Shift</label>
      <div class="col-md-6"><input type ="text" name="shift" id="shift" class="form-control"></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <label for="notes" class="col-md-3">Description</label>
      <div class="col-md-6"><textarea name="notes" class="form-control" id="notes"></textarea></div>
      <div class="clearfix"></div>
    </div>
    </div>

    <div class="form-froup">
      <div class="row">
        <div class="col-md-6"><input type="submit" class="btn btn-info" value="Add shift"></div>
      </div>
    </div>

  
</form>

    </div>
    </section>
 </div>


@endsection