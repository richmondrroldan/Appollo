@extends('layout')
@section('acontent')
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand topnav network-name" href="/home">APPOLLO</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>                        
                    <a href="/skills"><i class="fa fa-tasks fa-fw"></i> Skills</a>
                </li>
                <li>                        
                    <a href="/events"><i class="fa fa-calendar-o fa-fw"></i> Events</a>
                </li>
                <li>                        
                    <a href="{{route('articleC.index')}}"><i class="fa fa-edit fa-fw"></i> Articles</a>
                </li>
                <li>                        
                    <a href="{{route('menApp.index')}}"><i class="fa fa-edit fa-fw"></i> Mentors Approval</a>
                </li>
                <li>                        
                    <a href="/aWorkshop"><i class="fa fa-calendar-o fa-fw"></i> Workshop Request</a>
                </li>
                <li>                        
                    <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">
                
    {!! Form::model($mentor, ['method' => 'PATCH','route' => ['menApp.update', $mentor->id]]) !!}
    <div class="container" style="padding-top: 50px; width:800px;">
         @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="intro-header">
            <h2>Mentors Approval</h2>
        </div>
        <div class="form-group">
            <div class="form-group">
                <strong>Name:</strong>
                {{$mentor->name}} 
            </div>
            <div class="form-group">
                <strong>E-Mail:</strong>
                {{$mentor->email}} 
            </div>
            <div class="form-group">
                <strong>Background:</strong>
                {{$mentor->background}} 
            </div>
            <div class="form-group">
                <strong>Company:</strong>
                {{$mentor->company}} 
            </div>
            <div class="form-group">
                <strong>Expertise:</strong>
                {{$mentor->interests}} 
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                <select name="status" id="status" class="form-control">
                    <option value="{{$mentor->status}}">{{$mentor->status}}</option>
                    <option value="Approved">Approved</option>
                    <option value="Disapproved">Disapproved</option>
                </select>
            </div>

        </div>  

        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
        </br>
        </br>

        {!! Form::Close( )!!}  
        <a href="/menApp" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
</div>

@stop
