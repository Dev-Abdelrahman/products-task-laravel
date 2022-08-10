<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Repository\ProductRepository;


class ProductController extends Controller
{ 
    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }
 
    public function index()
    {
        try {
            $data['products'] = $this->product->getProducts();
        } catch (\Throwable $th) {
            $data['products'] = [];
        }
        
        return response()->json(['status' => 200, 'data' => $data, 'msg' => ''], 200);
    }
}
