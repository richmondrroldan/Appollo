@extends('layout')
@section('acontent')
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
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
                            <a href="/art"><i class="fa fa-edit fa-fw"></i> Articles</a>
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
<div id="page-wrapper" style="padding-top: 50px;">
                    <h3 class="center">Edit Article</h3>
                    </br>
                    <form class="" method="PATCH" action="{{route('articleC.update', '$article->id')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Title</label>
                            <div class="cols-sm-10">
                                <div class="input-group span">
                                    <input type="textarea" class="form-control" name="title" id="title"  value="{{$article->title}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Description</label>
                            <div class="cols-sm-10">
                                <div class="input-group span">
                                    <input type="textarea" class="form-control" name="description" id="description"  value="{{$article->description}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Link:</strong>
                            <input type="textarea" class="form-control" name="link" id="link"  value="{{$article->link}}"/>
                        </div>
                          <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Image</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="file" class="form-control" name="image" id="image" value="{{$article->name}}"/>
                                </div>
                            </div>
                        </div>
                        </br>
                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                        </br>
                        </br>

                        <a href="{{route('articleC.index')}}" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </br>
                        </br></br>
                        </br>
                                                
                    </form>
                </div>
            </div>


@stop
