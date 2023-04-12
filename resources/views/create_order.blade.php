@extends('app')
@section('content')


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container" style="margin-top: 20px;">
          <form>
            <div class="form-group">
            <?php
                        if($action == 0){
                          $name="";
                          $Amount="";
                          $Purchase_Date="";
                          $Delivery_Date="";
                          $Purchase_Date="";
                          $Quantity="";
                      }else{
                        foreach($order as $key => $orders){
                        $id = $orders->id;
                        $Customer_Name=$orders->Customer_Name;
                        $Product=$orders->Product;
                          $Purchase_Date=$orders->Purchase_Date;
                          $Delivery_Date=$orders->Delivery_Date;
                          $Purchase_Date=$orders->Purchase_Date;
                          $Quantity=$orders->Quantity;
                       }
                        }
                    ?>  
                    
                    @if($action == 0)
                    <form action="{{url('insret')}}" method="POST" class="form-horizontal">
                    @else
                    <form action="{{url('update/'.$id)}}" method="POST" class="form-horizontal">
                    @endif
                        @method('PUT')
                        @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$Customer_Name}}" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
              <label for="product">Product:</label>
              <select class="form-control" id="product" name="product" value="{{$Product}}" required>
                <option value="">Choose a product</option>
                <option value="Product A">Product A</option>
                <option value="Product B">Product B</option>
                <option value="Product C">Product C</option>
              </select>
            </div>
            <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="10" value="{{$Quantity}}"required>
            </div>
            <div class="form-group">
              <label for="delivery">Delivery Date:</label>
              <input type="date" class="form-control" id="delivery" name="delivery" value="{{$Delivery_Date}}"required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
          </form>
        </div>

      </main>
    </div>
  </div>

  endsection