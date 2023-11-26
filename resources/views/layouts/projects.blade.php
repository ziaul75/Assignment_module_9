@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    @if(isset($projects))
        @foreach($projects as $project)
            <div>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <!-- Add more project details as needed -->
            </div>
        @endforeach
    @else
        <p>No projects available.</p>
    @endif
    <!-- Add more content as needed -->
@endsection
