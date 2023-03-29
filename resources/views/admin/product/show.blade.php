@extends('admin.layout.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 mb-4">
                        <h1 class="m-0">{{$product->title}}</h1>
                    </div><!-- /.col -->

                </div>
                <div class="row mb-5">
                    <div class="col-auto">
                        <a href="{{route('admin.product.edit',$product->id)}}"
                           class="btn btn-primary">Редактировать</a>
                    </div>
                        <div class="col-auto">
                        <form action="{{route('admin.product.delete',$product->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <tbody>
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{($product->published == 1)?'Опубликовано':'Неопубликовано'}}</td>
                                        <td><span class="tag tag-success">{{$product->created_at}}</span></td>
                                    </tr>
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
