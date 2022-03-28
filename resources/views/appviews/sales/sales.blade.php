@extends('layouts.admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> sale</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="">All sale</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <a href="{{ route('sales.create') }}"><button type="button" class="btn btn-block btn-outline-primary btn-lg">Add Sales</button></a>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Monthly sale</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Shift</th>
                    <th>Pump</th>
                    <th>Product</th>
                    <th>Opening Meter</th>
                    <th>Closing Meter</th>
                    <th>RTT</th>
                    <th>Liters</th>
                    <th>Rate</th>
                    <th>Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($sales as $sale)
                  <tr>
                    <td>{{ $sale->sales_date }}</td>
                    <td>{{ $sale->shift }}</td>
                    <td>{{ $sale->pump_name }}</td>
                    <td>{{ $sale->product_alias }}</td>
                    <td>{{ $sale->opening_meter }}</td>
                    <td>{{ $sale->closing_meter }}</td>
                    <td>{{ $sale->rtt }}</td>
                    <td>{{ $sale->litres }}</td>
                    <td>{{ $sale->rate }}</td>
                    <td>{{ $sale->sales_total }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th colspan="10">Rendering engine</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    </section>
 </div>


@endsection