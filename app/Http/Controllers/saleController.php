<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class saleController extends Controller
{
    function index(Request $req)
    {
        $ecommerce_channel = DB::table('ecommerce_channel')
            ->where('date', $req->email)
            ->count();
        $social_channel =  DB::table('social_media_channel')->count();
        $physical_store =  DB::table('physical_store_channel')->count();
        return view('home.sale', compact('ecommerce_channel', 'social_channel', 'physical_store'));
    }

    function sellproduct(Request $req)
    {
        return view('home.sellProduct');
    }
}
