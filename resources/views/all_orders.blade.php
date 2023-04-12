
@extends('app')
@section('content')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="create_order">All Orders</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <a href="create_order" class="btn btn-outline-secondary">Add New Order</a>
            </div>
          </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Purchase Date</th>
                <th>Delivery Date</th>
                <th>Quantity</th>
                <th width="280px">Actions</th>
              </tr>
        
              @foreach($order as $orders)
                <tr>
                    <td>{{$orders->Customer_Name}}</td>
                    <td>{{$orders->Product}}</td>
                    <td>{{$orders->Purchase_Date}}</td>
                    <td>{{$orders->Delivery_Date}} </td>
                    <td>{{$orders->Quantity}} </td>
                    <td>
                      <a class="btn btn-info" href="{{url('edit/'.$orders->id)}}">Edit</a>
                     <form action="{{url('delete/'.$orders->id)}}" method="POST"> 
                      csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  @endsection