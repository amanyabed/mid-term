<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
        public function store(Request $request){
           
            $order = new Order(); 
            $order->Name = $request->name;
            $order->Email = $request->email;
            $order->Phone = $request->phone;
            $order->Address = $request->address;
            $order->Product = $request->product;
            $order->Quantity = $request->quantity;
            $order->Delivery_Date = $request->delivery;
            $order->Customer_Name = $request->name;
            $order->Purchase_Date = $request->purchase;
            //$request->validated();
            $order->save();
            return redirect()->back()->with('action',0);;
        }
    
     public function show(){
        $order = Order::get();
        return view('order',compact('order'));
     }
     public function destroy($id){
        Expense::where('id',$id)->delete();
         return redirect()->back()->with('action',0);
     }
    
     public function edit($id){
         $order=Order::where('id',$id)->get();
         $action = 1;
         return view('create_order',compact(['action' ,'order']));
     }
    
     public function update(UpdateOrderRequest $request,$id){
        $expense->validated();
        Order::where('id',$id)->update([
            'Customer_Name'=>$request->Customer_Name,
            'Product'=>$request->Product,
              'Purchase_Date'=>$request->Purchase_Date,
              'Delivery_Date'=>$request->Delivery_Date,
              'Purchase_Date'=>$request->Purchase_Date,
              'Quantity'=>$request->Quantity
        ]);
     
         $action = 0;
         $order=Order::get();
         return view('create_order',compact(['action','order']));
     }
    
    }

