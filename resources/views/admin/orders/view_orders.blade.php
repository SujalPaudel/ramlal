@extends('layouts.adminLayout.admin_design')  
@section('content')

<div id="content">
  <div id="content-header">
   <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View Products</a> </div>
    <h1>Categories</h1>
    @if(Session::has('flash_message_error'))
      <div class = "alert alert-error alert-block">
          <button type = "button" class = "close" data-dismiss = "alert">x</button>
              <strong>{!! session('flash_message_error') !!}</strong>
      </div>
    @endif 

    @if(Session::has('flash_message_success'))
      <div class = "alert alert-success alert-block">
          <button type = "button" class = "close" data-dismiss = "alert">x</button>
              <strong>{!! session('flash_message_success') !!}</strong>
      </div>
    @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Orders</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Order Date</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Ordered Products</th>
                  <th>Order Amount</th>
                  <th>Order Status</th>
                  <th>Payment Method</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($orders as $order)
                <tr class="gradeX">
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td>{{ $order->name }}</td>
                  <td>{{ $order->user_email}}</td>
                  <td>
                  @foreach($order->orders as $pro)
                    {{$pro->product_name}}
                    ({{$pro->product_qty}})<br> <!--product_code-->
                  @endforeach
                  </td>
                  <td>{{ $order->grand_total }}</td>
                  <td>{{ $order->order_status }}</td>
                  <td>{{ $order->payment_method }}</td>
                 
                  
                    <td class="center">
                      <a target = "_blank" href = "{{url('/admin/view-orders/'.$order->id)}}" class = "btn btn-success btn-mini" title = "View Order">View Order Details</a> 
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
</div>
@endsection

