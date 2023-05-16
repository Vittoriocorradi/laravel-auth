@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-4 text-uppercase">my projects</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-success">Back to Dashboard</a>
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
                    <td>{{ $project->starting_date }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection