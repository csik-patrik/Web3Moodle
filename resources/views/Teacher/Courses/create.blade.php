@extends('layouts.layout')

@section('title')
    {{ __('Kurzus létrehozás') }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Kurzus létrehozása') }}</h1>
            </div>
        </div>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kurzus kód:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('code') }}" name="code" class="form-control {{ $errors->has('code')? 'is-invalid' : ' '}}" placeholder="{{__('Kurzus kód')}}">
                        @if($errors->has('code'))
                            <label class="form-label text-danger" for="code">{{__('Kurzus kód megadása kötelező')}}</label>
                        @endif
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Kurzus megnevezése:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control {{ $errors->has('name')? 'is-invalid' : ' '}}" placeholder="{{__('Kurzus megnevezése')}}">
                        @if($errors->has('name'))
                            <label class="form-label text-danger" for="name">{{__('Kurzus megnevezésének megadása kötelező')}}</label>
                        @endif
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>{{__('Tulajdonos:')}}</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select name="owner_id" class="form-control">
                            @foreach ($owners as $owner)
                                <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                        </select>
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