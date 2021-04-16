<?php

namespace App\Http\Controllers;

use App\product;
use App\product_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $productcounts = product_list::select(
            'product_id',
            DB::raw('count(*) as total'),
            DB::raw('SUM(price) as totalprice'),
        )->groupBy('product_id')->get();
        return view('home')->with('productcounts', $productcounts);
    }
}
