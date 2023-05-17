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

        @if (session('message')) 
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('d_message')) 
            <div class="alert alert-danger">{{ session('d_message') }}</div>
        @endif

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
                            <li><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success p-2">Edit</a></li>
                            <li><a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $project->slug }}">Delete</a></li>
                        </ul>
                    </td>
                </tr>

                {{-- Modale per cancellazione --}}
                <div class="modal fade" id="{{ $project->slug }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete {{ $project->title }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Warning! You're about to delete a project. Do you wish to proceed?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Confirm" class="btn btn-danger p-2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection