@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-auto">
                    <h1 class="m-0">Добавить категорию</h1>
                </div>
                <div class="col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <a id="save-form-btn" type="submit" class="btn btn-primary">Сохранить</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form id="create-form" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-4 w-50">
                                <label for="category-name">Название категории</label>
                                <input type="text"
                                       name="title"
                                       value="{{old('title')}}"
                                       class="form-control"
                                       id="category-name"
                                       placeholder="Название категории">
                                @error('title')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 w-50">
                                <label for="page-preview">Превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            value="{{old('preview_image')}}"
                                            name="preview_image"
                                            id="page-preview">
                                        <label
                                            class="custom-file-label"
                                            for="page-preview">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4 w-50">
                                <label for="category-description">Описание</label>
                                <input type="text"
                                       name="description"
                                       value="{{old('description')}}"
                                       class="form-control"
                                       id="category-description"
                                       placeholder="Описание">
                            </div>
                            <div class="form-group mb-4 w-50">
                                <label for="category-seo_title">Seo заголовок</label>
                                <input
                                    type="text"
                                    name="seo_title"
                                    value="{{old('seo_title')}}"
                                    class="form-control"
                                    id="category-seo_title"
                                    placeholder="Seo заголовок">
                            </div>
                            <div class="form-group mb-4 w-50">
                                <label for="category-seo_description">Seo описание</label>
                                <input
                                    type="text"
                                    name="seo_description"
                                    value="{{old('seo_description')}}"
                                    class="form-control"
                                    id="category-seo_description"
                                    placeholder="Seo описание">
                            </div>
                            <div class="form-group mb-4 w-50">
                                <div class="form-check">
                                    <input type="checkbox" name="published" class="form-check-input" id="category-published">
                                    <label class="form-check-label" for="category-published">Опубликован</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Контент</label>
                                <form method="post">
                                    <textarea id="summernote"  name="content">{{old('content')}}</textarea>
                                </form>
                            </div>
                            <div class="form-group d-none">
                                <button type="submit" class="btn btn-primary">Добавить</button>
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
