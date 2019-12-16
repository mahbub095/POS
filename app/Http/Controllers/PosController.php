<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index(){
        $product=DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->select('categories.name','products.*')
            ->get();
        $categories=DB::table('categories')->get();
        return view('pos', compact('product','categories'));
    }
    public function PendingOrder()
    {
        $pending=DB::table('orders')
            ->join('customers','orders.customer_id','customers.id')
            ->select('customers.name','orders.*')->where('order_status','pending')->get();
        return view('pending_order',compact('pending'));
    }

    public function ViewOrder($id)
    {
        $order=DB::table('orders')
            ->join('customers','orders.customer_id','customers.id')
            ->select('customers.*','orders.*')
            ->where('orders.id',$id)
            ->first();

        $order_details=DB::table('orderdetails')
            ->join('products','orderdetails.product_id','products.id')
            ->select('orderdetails.*','products.name','products.code')
            ->where('order_id',$id)
            ->get();

        return view('order_confirmation', compact('order','order_details'));


    }

    public function PosDONE($id)
    {
        $approve=DB::table('orders')->where('id',$id)->update(['order_status'=>'success']);
        if ($approve) {
            $notification=array(
                'messege'=>'Successfully Order Confirmed ! And All Products Delevered',
                'alert-type'=>'success'
            );
            return Redirect()->route('home')->with($notification);
        }else{
            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function SuccessOrder()
    {
        $success=DB::table('orders')
            ->join('customers','orders.customer_id','customers.id')
            ->select('customers.name','orders.*')->where('order_status','success')->get();
        return view('success_order',compact('success'));
    }


}
