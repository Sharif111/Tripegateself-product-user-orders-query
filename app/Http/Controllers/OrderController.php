<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.order');
    }

    public function getOrder(Request $request)
    {
        //die("getOrder");
        $result = Order::with(['user','product'])->orderBy('id','asc');
        if($request->keyword != '')
        {
            $result = $result->where('id','=',$request->keyword);
        }
        $result = $result->get();
        return $result;

    }

    public function mostSellingProductAmountWise()
    {
        $result = DB::table('orders')
                ->join('product', 'product.id', '=', 'orders.product_id')
                ->select(['orders.product_id','product.price',DB::raw('sum(product.price) as amount')])
                ->groupBy('product_id')
                ->orderBy('amount','desc')
                ->get();
        return view('order.most_selling_product',['products' => $result]);
    }

    public function mostSellingProductAmountWiseElo()
    {
        $result = Order::with('product')
            ->withCount([
                'product AS amount' => function($query){
                    $query->select(DB::raw("COALESCE(SUM(price*COUNT(product_id)),0)"));
                }])
            ->groupBy('product_id')
            ->orderBy('amount','desc')
            ->get();
        return view('order.most_selling_product_eloq',['products' => $result]);
    }

    public function mostSellingProductPriceWise()
    {
        $result = DB::table('orders')
                ->join('product', 'product.id', '=', 'orders.product_id')
                ->select(['orders.product_id','product.price',DB::raw('sum(product.price) as amount')])
                ->groupBy('product_id')
                ->orderBy('price','desc')
                ->get();
        return view('order.most_selling_product',['products' => $result]);
        return $result;
    }

    public function mostSellingProductPriceWiseElo()
    {
        $result = Order::with('product')
            ->withCount([
                'product AS amount' => function($query){
                    $query->select(DB::raw("COALESCE(SUM(price*COUNT(product_id)),0)"));
                }])
            ->groupBy('product_id')
            ->get()
            ->sortByDesc('product.price');
        return view('order.most_selling_product_eloq',['products' => $result]);
    }

    public function viewCountryOrder()
    {
        $order = DB::table('orders')
            ->leftJoin('user', 'user.id', '=', 'orders.user_id')
            ->leftJoin('product', 'product.id', '=', 'orders.product_id')
            ->select(['user.country','orders.*','product.price',DB::raw('sum(product.price) as amount')])
            ->groupBy('user_id')
            ->orderBy('amount','desc')
            ->get();
        return view('order.country_order',['orders' => $order]);
    }

    public function viewProductOrder()
    {
        $order = DB::table('orders')
            ->leftJoin('product', 'product.id', '=', 'orders.product_id')
            ->select(['orders.*','product.price',DB::raw('sum(product.price) as amount')])
            ->groupBy('product_id')
            ->orderBy('product_id')
            ->get();
        return view('order.product_order',['orders' => $order]);
    }
}

    





















