@extends('layouts.layout')

@section('title')
    {{ __('Kurzusok') }}
@endsection

@section('content')
<div class="container-fluid p-3" style="min-height: 100vh">
    <div class="row align-items-center">
        <div class="col-lg-12 margin-tb text-center p-2">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Kurzusok karbantartása') }}</h1>
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
            <a class="btn bg-danger text-white" href="{{ route('courses.create') }}"> {{__('Kurzus létrehozása')}}</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">{{__('Kód')}}</th>
                        <th scope="col">{{__('Megnevezés')}}</th>
                        <th scope="col">{{__('Kategória')}}</th>
                        <th scope="col">{{__('Létrehozó')}}</th>
                        <th scope="col">{{__('Létrehozva')}}</th>
                        <th scope="col">{{__('Módosítva')}}</th>
                        <th scope="col">{{__('Művelet')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th>{{ $course->id }}</th>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->category->name }}</td>
                            <td>{{ $course->user->name }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td>{{ $course->updated_at }}</td>
                            <td>
                                <form action="{{ route('courses.destroy', $course) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    
                                    <a class="btn btn-warning" href="{{ route('courses.edit', $course) }}">{{__('Módosítás')}}</a>
                    
                                    <button type="submit" onclick="return confirm('{{ __('Biztosan törli ezt a kurzust?') }}')"  class="btn btn-danger">{{__('Törlés')}}</button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td> {{ $courses->links()}} </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection