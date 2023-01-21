@extends('layouts.layout')

@section('title')
    {{ __('Kurzus hozzárendelés') }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Kurzus hozzárendelés') }}</h1>
            </div>
        </div>
        <form action="{{ route('admin.course-members.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kurzus:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="course_id" class="form-control">
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <label class="form-label text-danger" for="owner_id">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Diák:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="user_id" class="form-control">
                            @foreach ($students as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <label class="form-label text-danger" for="owner_id">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-success">{{__('Hozzárendelés')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection