@extends('layouts.home')

@section('pageHeader')
    Profile
@endsection

@section('pageTitle')
    Profile
@endsection

@section('content')
    <div class="profileOne">
        <div class="halfProfile">

        </div>
        <div class="halfProfile">
            <div class="profileContent">
                @include('ProfileElements.actionbarone', ['user' => $main])
                @include('ProfileElements.title', ['user' => $main])
                @include('ProfileElements.description', ['user' => $main])
                @include('ProfileElements.followerstats', ['user' => $main])
            </div>
        </div>

    </div> 
@endsection