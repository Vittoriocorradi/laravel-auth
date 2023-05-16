@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-4 d-flex justify-content-between align-items-center">
            <h1 class="text-uppercase">my projects</h1>
            <div>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Create new project</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-success">Back to Dashboard</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Type</th>
                    <th scope="col">Started</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }} </td>
                    <td>{{ $project->status }} </td>
                    <td>{{ $project->type }} </td>
                    <td>{{ $project->starting_date }}</td>
                    <td>
                        <ul class="d-flex list-unstyled gap-2 justify-content-end align-items-center m-0">
                            <li><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success p-2">Show</a></li>
                            <li><a href="" class="btn btn-success p-2">Edit</a></li>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger p-2">
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection