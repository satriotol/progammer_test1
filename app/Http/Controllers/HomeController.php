<?php

namespace App\Http\Controllers;

use App\product_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = product_list::all();
        $productcounts = product_list::groupBy('product_id')
            ->select(
                'product_id',
                DB::raw('count(*) as total'),
                DB::raw('SUM(price) as totalprice'),
            )->get();
        return view('home')->with('products', $products)->with('productcounts', $productcounts);
    }
}
