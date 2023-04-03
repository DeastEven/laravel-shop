@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-sm-6 mb-4">
                    <h1 class="m-0">Товары</h1>
                </div><!-- /.col -->
                <div class="col-12">
                    <a href="{{route('admin.product.create')}}" class="btn btn-primary">Добавить</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
