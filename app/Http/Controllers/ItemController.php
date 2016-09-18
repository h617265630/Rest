<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Item;
use App\Http\Model\Order;
use App\Http\Model\OrderItem;
class ItemController extends CommonController
{
    public function itemContent()
    {
        return view('item.content');
    }

    public function itemEdit()
    {
        return view('item.edit');
    }
    public function search()
    {
        $input=Input::all();
        $item=Item::where('name',$input['name'])->first();
        if($item)
        {
            return view('item.content')->withItem($item);
        }
        else
        {
            return back()->withErrors('There is no such item.');
        }
    }
    public function addToOrder($id)
    {
        //create order without insert value for subtotal;
        $order=new Order;
        $order->item_id=$id;
        $order->customer_id=session('customer')['id'];
        $order->order_type="1";
        $order->save();

        //create the OrderItem relationship ,determind the quantity of this item for this order.
        $input=Input::all();
        $quantity=$input['quantity'];

        $orderitem=new OrderItem;
        $orderitem->item_id=$id;
        $orderitem->order_id=$order->id;
        $orderitem->quantity=$quantity;
        $orderitem->save();

        //caculate the total cost then update it.
        $item=Item::where('id',$order->item_id)->first();
        $order->update(['sub_total'=>$orderitem->quantity*$item->price]);
        dd('ok');
        return back();
    }
}
