<?php


namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product){
        $data = $request->validated();
        $product->update($data);
        $categories = Category::all();
        return view('admin.product.edit',compact('product','categories'));
    }
}
