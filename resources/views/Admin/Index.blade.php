@extends('layouts.layout')

@section('title') {{ __('Karbantartás') }} @endsection

@section('content')
<div class="container p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb text-center p-2">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Karbantartás') }}</h1>
        </div>
    </div>
    <div class="row m-3 p-1 pb-4">
        <div class="card-deck">
            <div class="col-lg-4 col-md-3 col-md-6 col-sm-12">
                <div class="card h-100">
                    <img class="card-img-top mt-3" height="150" src="{{ url('..\images\user.svg') }}" alt="{{ __('Felhasználók') }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ __('Felhasználók kezelése') }}</h5>
                        <p class="card-text">{{__('Felhasználó hozzáadása, regisztrált felhasználók adatainak módosítása. Felhasználók törlése.')}}</p>
                        <a href="{{ route('admin.users.index')}}" class="btn btn-danger mt-auto">{{__('Megnyitás')}}</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-3 col-md-6 col-sm-12">
                <div class="card h-100">
                    <img class="card-img-top mt-3" height="150" src="{{ url('..\images\book.svg') }}" alt="{{ __('Kurzusok') }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ __('Kurzusok') }}</h5>
                        <p class="card-text">{{__('Kurzus létrehozása, meglévő kurzusok adatainak módosítása. Kurzusok törlése')}}</p>
                        <a href="{{ route('admin.courses.index')}}" class="btn btn-danger mt-auto">{{__('Megnyitás')}}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-md-6 col-sm-12">
                <div class="card h-100">
                    <img class="card-img-top mt-3" height="150" src="{{ url('..\images\activity.svg') }}" alt="{{ __('Aktivitás') }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ __('Aktivitás') }}</h5>
                        <p class="card-text">{{__('Az oldalon történt változások megtekintése.')}}</p>
                        <a href="#" class="btn btn-danger mt-auto">{{__('Megnyitás')}}</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection