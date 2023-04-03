@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-auto">
                    <h1 class="mb-2">{{$category->title}}</h1>
                </div><!-- /.col -->
                <div class="col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <a id="save-form-btn" type="submit" class="btn btn-primary">Сохранить</a>
                        </div>
                        <div class="col-auto">
                            <form action="{{route('admin.category.delete',$category->id)}}" method="POST">
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
                    <form id="create-form" action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-4">
                                        <label for="category-name">Название категории</label>
                                        <input type="text"
                                               name="title"
                                               value="{{old('title', $category->title)}}"
                                               class="form-control"
                                               id="category-name"
                                               placeholder="Название категории">
                                        @error('title')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="category-description">Описание</label>
                                        <input type="text"
                                               name="description"
                                               value="{{old('description', $category->description)}}"
                                               class="form-control"
                                               id="category-description"
                                               placeholder="Описание">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="category-seo_title">Seo заголовок</label>
                                        <input
                                                type="text"
                                               name="seo_title"
                                               value="{{old('seo_title', $category->seo_title)}}"
                                               class="form-control"
                                               id="category-seo_title"
                                               placeholder="Seo заголовок">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="category-seo_description">Seo описание</label>
                                        <input
                                                type="text"
                                               name="seo_description"
                                               value="{{old('seo_description', $category->seo_description)}}"
                                               class="form-control"
                                               id="category-seo_description"
                                               placeholder="Seo описание">
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="published" class="form-check-input" id="category-published">
                                            <label class="form-check-label" for="category-published">Опубликован</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        @if($products)
                                        <label for="category-products">Товары</label>
                                        <div class="card">
                                            <div class="card-body table-responsive p-0">

                                                    <table class="table table-hover text-nowrap" id="category-products">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Название</th>
                                                            <th>Статус</th>
                                                            <th>Дата создания</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($products as $product)
                                                            <tr>
                                                                <td>{{$product->id}}</td>
                                                                <td><a href="{{route('admin.product.edit',$product->id)}}">{{$product->title}}</a></td>
                                                                <td>{{($product->published == 1)?'Опубликовано':'Неопубликовано'}}</td>
                                                                <td><span class="tag tag-success">{{$product->created_at}}</span></td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
                                        @else
                                            <p>В категории {{$category->title}} товаров нету</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="preview-wrapper">
                                            <img src="{{asset('public/storage/'.$category->preview_image) }}" alt="{{$category->title}}">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input
                                                    type="file"
                                                    class="custom-file-input"
                                                    name="preview_image"
                                                    id="page-preview">
                                                <label
                                                    class="custom-file-label"
                                                    for="page-preview">{{old('preview_image', $category->preview_image)?old('preview_image', $category->preview_image): 'Выберите файл' }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузка</span>
                                            </div>
                                            @error('preview_image')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="summernote">Контент</label>
                                <textarea id="summernote"  name="content">{{old('content', $category->content)}}</textarea>
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
