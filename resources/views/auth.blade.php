@extends('template/template')

@section('styles')
    <style>
        body {
            color: #878787;
        }
        content{
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .authform{
            margin:auto;
        }
    </style>

@section('content')

    {{-- form for logging in with iin(12 digits) and password with ability to show password --}}
    <div class="container m-auto authform">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">

                <!--Form with header-->
                <form action="/login" method="POST">
                    @csrf
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-user"></i> Вход</h3>
                                <p class="m-0">Введите свои данные</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="number" minlength="12" maxlength="12" class="form-control" id="iin"
                                        name="iin" placeholder="ИИН" value="{{ old('iin') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Пароль" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Войти" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->

            </div>
        </div>
    @endsection
