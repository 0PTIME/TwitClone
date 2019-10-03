@extends('layouts.home')

@section('pageHeader')
    <div class="mainHeader">
        <p class="globalHeader">Home</p>
    </div>
    <div class="defaultPlaceholder"></div>
@endsection

@section('pageTitle')
    {{ $main->display_name }}
@endsection

@section('content')
    <div class="profileOne">
        <div class="topHalfProfile">

        </div>
        <div class="bottomHalfProfile">
            <div class="profileContent">
                @include('ProfileElements.actionbarone', ['user' => $main])
                @include('ProfileElements.titleone', ['user' => $main])
                @include('ProfileElements.description', ['user' => $main])
                @include('ProfileElements.followerstats', ['user' => $main])
            </div>
        </div>

    </div> 
@endsection