<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as Session;
use App\Models\Shop;


class CheckoutController extends Controller
{


    public function scan(Request $request)
    {
       
        Session::push('shop.items', $request->product);

        $shop = new Shop(Session::get('shop.items'));

        $list = $shop->countItems();

        $total = $shop->CalPrice();

        return view('index')->with(array('items'=>$list,'total'=>$total));


    }

    public function discount()
    {
        $discount = true;
        $shop = new Shop(Session::get('shop.items'));

        $list = $shop->countItems();

        $total = $shop->CalPrice($discount);

        return view('index')->with(array('items'=>$list,'total'=>$total));
    }


    public function checkout()
    {
        Session::flush();

        return redirect('/');
    }
}
