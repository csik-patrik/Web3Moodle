@extends('layouts.layout')

@section('title')
{{ __('Felhasználók') }}
@endsection

@section('content')
<div class="container-fluid p-3" style="min-height: 100vh">
    <div class="row align-items-center">
        <div class="col-lg-12 margin-tb text-center p-2">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Felhasználók karbantartása') }}</h1>
        </div>
    </div>
    @if ($message = Session::get('success'))
            <div class="row">
                <div class="col-lg-4">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><p>{{ $message }}</p></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    <div class="row justify-content-center pb-3">
        <div class="class-lg-6">
            <a class="btn bg-danger text-white" href="{{ route('admin.users.create', app()->getLocale()) }}"> {{__('Felhasználó létrehozása')}}</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">{{__('Név')}}</th>
                        <th scope="col">{{__('Szerepkör')}}</th>
                        <th scope="col">{{__('E-mail cím')}}</th>
                        <th scope="col">{{__('Létrehozva')}}</th>
                        <th scope="col">{{__('Módosítva')}}</th>
                        <th scope="col">{{__('Művelet')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <form action="{{ route('admin.users.destroy', ['language'=>app()->getLocale(), 'user'=>$user]) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    
                                    <a class="btn btn-warning" href="{{ route('admin.users.edit', ['language'=>app()->getLocale(), 'user'=>$user]) }}">{{__('Módosítás')}}</a>
                    
                                    <button type="submit" onclick="return confirm('{{ __('Do you want to delete this user?') }}')"  class="btn btn-danger">{{__('Törlés')}}</button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection