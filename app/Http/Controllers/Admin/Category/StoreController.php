<?php


namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        if( array_key_exists('preview_image',$data)){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        Category::firstOrcreate($data);
        return redirect()->route('admin.category.index');
    }
}
