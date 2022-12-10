@extends('layouts.layout')

@section('title') {{ __('Hoppá!') }} @endsection

@section('content')
<div class="container-fluid p-3">
    <div class="row m-3 p-1 pb-4">
        <div class="col-lg-5">
            <img class="card-img-top mt-3" height="300" src="{{ url('..\images\stop.svg') }}" alt="{{ __('Felhasználók') }}">
        </div>
        <div class="col-lg-7">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Önnek nincs jogosultsága ezt az oldalt megjeleníteni!') }}</h1>
        </div>
    </div>
</div>
@endsection