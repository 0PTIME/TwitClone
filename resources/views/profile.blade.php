@extends('layouts.home')

@section('pageHeader')
    <div class="mainHeader">
        <p class="globalHeader">Home</p>
    </div>
    <div class="defaultPlaceholder"></div>
@endsection

@section('pageTitle')
    {{ $user->display_name }}
@endsection

@section('content')
    <div class="profileOne">
        <div class="topHalfProfile">

        </div>
        <div class="bottomHalfProfile">
            <div class="profileContent">
                @include('ProfileElements.actionbarone', ['user' => $user])
                @include('ProfileElements.titleone', ['user' => $user])
                @include('ProfileElements.description', ['user' => $user])
                @include('ProfileElements.followerstats', ['user' => $user])
            </div>
        </div>
        @foreach ($tweets as $main)
            @include('tweettree', ['main' => $main])
        @endforeach
    </div> 
@endsection