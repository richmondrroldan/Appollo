@extends('layout')
@include('templates/nav')
@section('content')
<!-- News -->
<section class="newsfeed">
    <div class="programs intro-header" style="margin-top:50px">
        <span class="programs-header">UPCOMING EVENTS</span>
    </div>
    <div class="intro-header" style="margin-top: 30px; margin-bottom: 30px;">
           
            @foreach($events as $event)
                <div class="well">
                        <h4 class="media-heading"> <strong>Event Title :</strong> {{$event->title}}</h4>
                        <p class="center"><strong>Event Description :</strong> {{$event->description}} </p>
                        <p><strong>Event Venue : </strong> {{$event->venue}}</p>
                        <p><strong>Event Date : </strong> {{$event->date}}</p>
                   </div>
                </br>

                  
            @endforeach 

    </div>
</section>
<!-- End News -->
@stop
