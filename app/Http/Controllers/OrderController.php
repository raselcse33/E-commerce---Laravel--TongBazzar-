<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Session;

class OrderController extends Controller
{
    public function orderList()
    {
    	$data['orders'] = Order::where('deliveryDate', '=', 0)->paginate(10);
      return view('admin.order.order_list',$data);
    }


    public function detailsOrder($id)
    {
    	$data['order'] = Order::where('id',$id)->first();
    	return view('admin.order.details_order',$data);
    }

    public function pendingOrder($id)
    {
        $pending = Order::find($id);
        $pending->deliveryDate = date("Y-m-d");
        $pending->save();
        Session::flash('success', 'Order purchase Successfully Done');
        return redirect()->back();
    }

    public function deliveryList()
    {
        $data['orders'] = Order::where('deliveryDate', '!=', 0)->paginate(10);
        return view('admin.order.delivery_list',$data);
    }

    public function deliveryDetailsOrder($id)
    {
        $data['order'] = Order::where('id',$id)->first();
        return view('admin.order.delivery_details_order',$data);
    }

    public function delete($id)
    {
        $delete = Order::find($id);
        $delete->delete();
        Session::flash('success', 'Order Delete Successfully Done');
        return redirect()->back();

    }
}
