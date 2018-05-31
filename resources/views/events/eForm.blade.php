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
                    <a href="/rWorkshop"><i class="fa fa-calendar-o fa-fw"></i> Workshop Request</a>
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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Event</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Title:</strong>
                <input type="textarea" class="form-control" name="title" id="title"  value="{{$events->title}}"/>

                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('value' => $events->description,'class' => 'form-control','style'=>'height:100px')) !!}

                <strong>Venue:</strong>
                <input type="textarea" class="form-control" name="venue" id="venue"  value="{{$events->venue}}"/>
            
                <strong>Date:</strong>
                <input type="textarea" class="form-control" name="date" id="date"  value="{{$events->date}}"/>
            </div>
        </div>

    </div>
         <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
         </br>
         </br>
         <a href="/events" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
    </div>

</div>


