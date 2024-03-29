@extends('layouts.layout')

@section('title')
    {{ __('Felhasználó létrehozás') }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Felhasználó létrehozása') }}</h1>
            </div>
        </div>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Teljes név:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control {{ $errors->has('name')? 'is-invalid' : ' '}}" placeholder="{{__('Teljes név')}}">
                        @error('name')
                            <label class="form-label text-danger" for="name">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('E-mail cím:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('email') }}" name="email" class="form-control {{ $errors->has('email')? 'is-invalid' : ' '}}" placeholder="{{__('E-mail cím')}}">
                        @error('email')
                            <label class="form-label text-danger" for="email">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Jelszó:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control {{ $errors->has('password')? 'is-invalid' : ' '}}" placeholder="{{__('Jelszó')}}">
                        @error('password')
                            <label class="form-label text-danger" for="password">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Szerepkör:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="role_id" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <label class="form-label text-danger" for="role_id">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-success">{{__('Létrehozás')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection