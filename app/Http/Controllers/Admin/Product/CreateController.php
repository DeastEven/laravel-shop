<?php


namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;


class CreateController extends Controller
{
    public function __invoke(){
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }
}
