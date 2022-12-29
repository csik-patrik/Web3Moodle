@extends('layouts.layout')

@section('title')
{{ __('Aktivitás') }}
@endsection

@section('content')
<div class="container-fluid p-3" style="min-height: 100vh">
    <div class="row align-items-center">
        <div class="col-lg-12 margin-tb text-center p-2">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Aktivitás megtekintése') }}</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">{{__('Megnevezés')}}</th>
                        <th scope="col">{{__('Leírás')}}</th>
                        <th scope="col">{{__('Típus')}}</th>
                        <th scope="col">{{__('Esemény')}}</th>
                        <th scope="col">{{__('Tárgy ID')}}</th>
                        <th scope="col">{{__('Okozó ID')}}</th>
                        <th scope="col">{{__('Dátum')}}</th>
                    </tr>
                </thead>
                @forelse ($activities as $activity)
                    <tbody>
                        <tr>
                            <th>{{ $activity->id }}</th>
                            <td>{{ $activity->log_name }}</td>
                            <td>{{ $activity->description }}</td>
                            <td>{{ $activity->subject_type }}</td>
                            <td>{{ $activity->event }}</td>
                            <td>{{ $activity->subject_id }}</td>
                            <td>{{ $activity->causer_id }}</td>
                            <td>{{ $activity->created_at }}</td>
                        </tr>
                    </tbody>
                    @empty
                    <div class="row align-items-center">
                        <div class="col-lg-12 margin-tb text-center p-2">
                            <h1 class="display-4 d-flex justify-content-center">{{ __('Nincs megjeleníthető aktivitás!') }}</h1>
                        </div>
                    </div>
                    @endforelse
                
            </table>
        </div>
    </div>
</div>
@endsection