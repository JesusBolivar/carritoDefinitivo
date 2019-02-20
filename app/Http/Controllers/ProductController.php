<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Games;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Games::all();
        return view('shop')->with('products', $products);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Games::where('id', $id)->firstOrFail();
       // $interested = Games::where('name', '!=', $name)->get()->random(4);

        return view('product')->with(['product' => $product]);
    }


}
