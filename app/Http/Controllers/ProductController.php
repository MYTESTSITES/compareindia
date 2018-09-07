<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\Product;
use App\Product;

class ProductController extends Controller
{
    //
    //private $data = array();
    public function index()
    {

      $products = Product::all();
      $data = [
        'products'  => $products,
        'title'  => 'vipin test page',
        'heading'   => 'This is test heading only',
        'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500',
        'author'=>'vipin Nethues'
      ];

      return view('products.product', $data);
      //return  'Index page';
    }

    public function create()
    {
      $data = [
        'title'  => 'Create New product',
        'heading'   => 'Create New product',
        ];
      //print_r($this->data);
      return view('products.create', $data);

    }

    public function store(Request $request)
    {
      $product = New Product;
      $product->product_name = $request->name;
      $product->product_slug = $request->slug;
      $product->save();
      $data = [
        'title'  => 'Create New product',
        'heading'   => 'Create New product',
        ];
      return view('products.create', $data);

    }

}
