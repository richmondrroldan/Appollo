@extends('layout')        
        @if(Auth::user()->uType == 1)
            @section('acontent')
            @include('admin')
            @endsection
        @elseif(Auth::user()->uType == 2)
            @section('content')
            @include('templates/nav')
            @include('profile.profile')
            @endsection
        @else
        	@section('content')
            @include('templates/nav')
            @include('profile.profile')
            @endsection
        @endif
