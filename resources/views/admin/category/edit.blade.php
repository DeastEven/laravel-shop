@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="m-0">Редактирование категории {{$category->title}}</h1>
                </div><!-- /.col -->
                <div class="col-12 col-md-6">
                    <form action="{{route('admin.category.update',$category->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category-name">Название категории</label>
                                <input type="text"
                                       value="{{$category->title}}"
                                       name="title"
                                       class="form-control"
                                       id="category-name"
                                       placeholder="Название категории">
                                @error('title')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="published" class="form-check-input" id="category-published">
                                <label class="form-check-label" for="category-published">Опубликовано</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.row -->
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
