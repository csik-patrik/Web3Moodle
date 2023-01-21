@extends('layouts.layout')

@section('title')
{{ __('Kurzusaim') }}
@endsection

@section('content')
<div class="container-fluid p-3" style="min-height: 100vh">
    <div class="row align-items-center">
        <div class="col-lg-12 margin-tb text-center p-2">
            <h1 class="display-4 d-flex justify-content-center">{{ __('Kurzusaim') }}</h1>
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
            <a class="btn bg-danger text-white" href="#"> {{__('Kurzus jelentkezés')}}</a>
        </div>
    </div>
    @if(count($courseMembers) != 0)
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{__('Kurzus')}}</th>
                            <th scope="col">{{__('Hozzáadva')}}</th>
                            <th scope="col">{{__('Művelet')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courseMembers as $courseMember)
                            <tr>
                                <td>{{ $courseMember->course[0]->name}}</td>
                                <td>{{ $courseMember->created_at }}</td>
                                <td>
                                    <form action="{{ route('student.course-members.destroy', $courseMember) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" onclick="return confirm('{{ __('Biztosan törli a hozzárendelést?') }}')"  class="btn btn-danger">{{__('Leadás')}}</button>
                                        
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td> {{ $courseMembers->links()}} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="row align-items-center">
            <div class="col-lg-12 margin-tb text-center p-2">
                <h1 class="display-4 d-flex justify-content-center">{{ __('Önnek nincs felvett kurzusa!') }}</h1>
            </div>
        </div>
    @endif
</div>
@endsection