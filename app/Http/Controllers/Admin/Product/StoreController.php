<?php


namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Product;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Product::firstOrcreate($data);
        return redirect()->route('admin.product.index');
    }
}
