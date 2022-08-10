<?php

namespace App\Http\Repository;
use App\Http\Interfaces\ProductInterface;
use App\Models\Product;


class ProductRepository implements ProductInterface
{
    public function getProducts(){
        return Product::where('deleted_at', null)->where('active', 1)->orderBy('id','DESC')->get();
    }
}