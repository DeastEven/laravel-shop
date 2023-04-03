@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-auto">
                    <h1 class="m-0">{{$product->title}}</h1>
                </div>
                <div class="col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <a id="save-form-btn" type="submit" class="btn btn-primary">Сохранить</a>
                        </div>
                        <div class="col-auto">
                            <form id="create-form" action="{{route('admin.product.delete',$product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           <div class="row">
               <div class="col-12 ">
                   <form action="{{route('admin.product.update',$product->id)}}" method="POST" id="create-form">
                       @csrf
                       @method('patch')
                       <div class="card-body">
                           <div class="form-group w-50 mb-4">
                               <label for="category-name">Название товара</label>
                               <input type="text"
                                      name="title"
                                      value="{{$product->title}}"
                                      class="form-control"
                                      id="category-name"
                                      placeholder="Название категории">
                               @error('title')
                               <div class="text-danger">Это поле необходимо заполнить</div>
                               @enderror
                           </div>
                           <div class="form-group w-50">
                               <label>Выберите категорию</label>
                               <select name="category_id"
                                       class="form-control select2"
                                       style="width: 100%;">
                                   @foreach($categories as $category)
                                       <option value="{{$category->id}}"
                                           {{$category->id == $product->category_id ? 'selected' : ''}}>
                                           {{$category->title}}
                                       </option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="summernote">Контент</label>
                               <form method="post">
                                   <textarea id="summernote"  name="content">{{$product->content}}</textarea>
                               </form>
                           </div>

                           <div class="form-check">
                               <input type="checkbox" name="published" class="form-check-input" id="category-published">
                               <label class="form-check-label" for="category-published">Опубликовано</label>
                           </div>
                           <div class="form-group d-none">
                               <button type="submit" class="btn btn-primary">Обновить</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
