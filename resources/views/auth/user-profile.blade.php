@extends('layouts.layout')

@section('title')
    {{ Auth::user()->name }}
@endsection

@section('content')
    <div class="container p-3" style="min-height: 100vh">
        <div class="row p-2">
            <div class="col-lg-12 margin-tb p-2">
                <h1 class="display-4 d-flex justify-content-center">{{__('User profile')}}</h1>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-12 margin-tb p-2">
                <div class="media">
                    <img class="mr-3" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&rounded=true&background=eda828&color=ffffff">
                    <div class="media-body">
                        <h5 class="mt-0">{{Auth::user()->name}}</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{__('Teljes név:')}}</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{ Auth::user()->name }}</h3>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{__('E-mail cím:')}}</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{ Auth::user()->email }}</h3>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{__('Szerepkör:')}}</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>{{Auth::user()->role->name}}</h3>
            </div>
        </div>
    </div>
    </div>
@endsection