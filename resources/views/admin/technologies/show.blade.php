@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{$technology->name}}</h1>
        @if ($technology->projects)
            <h3>Progetti associati:</h3>
            <ul>
                @foreach ($technology->projects as $project)
                    <li><a href="{{route('admin.projects.show', $project->slug)}}">{{$project->title}}</a></li>
                @endforeach
            </ul>
            @else
            <h3>Nessun progetto associato</h3> 
        @endif
    </div>

@endsection