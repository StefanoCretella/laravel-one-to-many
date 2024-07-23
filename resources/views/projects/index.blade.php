@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-4">Create Project</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->type ? $project->type->name : 'No Type' }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
