<?php


namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category){
        $data = $request->validated();
        if( array_key_exists('preview_image',$data)){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        $category->update($data);

        return view('admin.category.show',compact('category'));
    }
}
