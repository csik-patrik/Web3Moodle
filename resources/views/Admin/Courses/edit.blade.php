@extends('layouts.layout')

@section('title')
    {{ __('Kurzus módosítása') }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Kurzus módosítása') }}</h1>
            </div>
        </div>
        <form action="{{ route('admin.courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{$course->id}}" name="id">
            <div class="form-group">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kurzus kód:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('code', $course->code) }}" name="code" class="form-control {{ $errors->has('code')? 'is-invalid' : ' '}}" placeholder="{{__('Kurzus kód')}}">
                        @error('code')
                            <label class="form-label text-danger" for="code">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kurzus megnevezése:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('name', $course->name) }}" name="name" class="form-control {{ $errors->has('name')? 'is-invalid' : ' '}}" placeholder="{{__('Kurzus megnevezése')}}">
                        @error('name')
                            <label class="form-label text-danger" for="name">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kategória:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="category_id" value="{{ old('category_id', $course->category_id) }}" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <label class="form-label text-danger" for="category_id">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Tulajdonos:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="owner_id" value="{{ old('owner_id', $course->owner_id) }}" class="form-control">
                            @foreach ($owners as $owner)
                                <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                        </select>
                        @error('owner_id')
                            <label class="form-label text-danger" for="owner_id">{{ $message }}</label>
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