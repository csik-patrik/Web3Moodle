@extends('layouts.layout')

@section('title')
    {{ __('Felhasználó módosítása') }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Felhasználó módosítása') }}</h1>
            </div>
        </div>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{$user->id}}" name="id">
            <div class="form-group">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Teljes név:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control {{ $errors->has('name')? 'is-invalid' : ' '}}" placeholder="{{__('Teljes név')}}">
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
                        <input type="text" value="{{ $user->email }}" name="email" class="form-control {{ $errors->has('email')? 'is-invalid' : ' '}}" placeholder="{{__('E-mail cím')}}">
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
                                @if($role->id==$user->role->id)
                                    <option selected value="{{$role->id}}">{{$role->name}}</option>
                                @else
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('role_id')
                            <label class="form-label text-danger" for="role_id">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-success">{{__('Mentés')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection