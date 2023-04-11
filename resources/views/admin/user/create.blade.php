@extends('admin.layout.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-auto">
                    <h1 class="m-0">Добавить пользователя</h1>
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
                <div class="col-12 ">
                    <form id="create-form" action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group w-50 mb-4">
                                <label for="user-name">Имя</label>
                                <input type="text"
                                       name="name"
                                       value="{{old('name')}}"
                                       class="form-control"
                                       id="user-name"
                                       placeholder="Имя пользователя">
                                @error('name')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group w-50 mb-4">
                                <label for="user-email">Email</label>
                                <input type="email"
                                       name="email"
                                       value="{{old('email')}}"
                                       class="form-control"
                                       id="user-email"
                                       placeholder="Email пользователя">
                                @error('email')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group w-50 mb-4">
                                <label for="user-pass">Пароль</label>
                                <input type="password"
                                       name="password"
                                       value="{{old('password')}}"
                                       class="form-control"
                                       id="user-pass"
                                       placeholder="Пароль">
                                @error('password')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Выберите роль</label>
                                <select name="role"
                                        class="form-control select2"
                                        style="width: 100%;">
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}">{{$role}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
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
