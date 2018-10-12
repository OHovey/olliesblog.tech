@extends('layouts.master')

@section('content')

    <div class="container">

        <h4 id="all-projects" style="font-weight: 100;">All Projects</h4>

        @if (Auth::check())

            <a href="/project/create"><button class="btn btn-primary">New Project</button></a>

        @endif

        <ul class="list-group">

            @foreach($projects as $project)

                <li class="list-group-item">

                    <h5>{{ $project->name }}
                    @if (Auth::check()) <a style="float:right;" href="/project/delete/{{ $project->id }}"><button class="btn btn-warning">Delete project</button></a>  @endif</h5>
                    <br>
                    @if ($project->site)
                        <small>site:<a href="{{ $project->site }}">{{ $project->site }}</a></small>
                    @endif
                    <small>Github: <a href="{{ $project->github }}">{{ $project->github }}</a></small>
                    @if ($img = $project->img)
                        <img src="{{ asset('images/' . $project->img ) }}" class="img-fluid">
                    @endif
                    <br>
                    <p>{{ $project->description }}</p>

                </li>

            @endforeach

        </ul>

    </div>

@endsection