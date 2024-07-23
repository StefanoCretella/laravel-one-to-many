@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $project->name }}</h1>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Type:</strong> {{ $project->type ? $project->type->name : 'No Type' }}</p>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>
</div>
@endsection
