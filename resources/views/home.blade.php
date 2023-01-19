@extends('layouts.layout')

@section('title') {{ __('Kezdőlap') }} @endsection

@section('content')

<div class="container-fluid p-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">{{__('Üdvözlom a Moodle rendszerben!')}}</h1>
                <p class="lead">{{__('Ez a project a webfejlesztői portfólióm része.')}}</p>
                <p class="lead">{{__('Célja, hogy megvalósítsak egy kezdetleges moodle rendszert PHP Laravel keretrendszer segítségével.')}}</p>
                <p class="lead">{{__('Ezen a projecten keresztül szeretném bemutatni a Laravelben és VUE.JS-ben megszerzett tudásom.')}}</p>
                <hr class="my-4">
                <p>{{__('A project forráskódja a linken keresztül elérhető!')}}</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" target="blank" href="https://github.com/csik-patrik/Web3Moodle" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github mr-2" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                  </svg>{{__('Github')}}</a>
                </p>
              </div>
        </div>
    </div>
</div>
@endsection