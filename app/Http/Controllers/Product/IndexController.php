<?php


namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke(){
        $product = Product::find(1);
        $category = Category::find(1);
        dd($category->products);
    }
}
