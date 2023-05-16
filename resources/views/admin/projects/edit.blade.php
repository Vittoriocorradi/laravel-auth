@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-between align-items-center">
        <h1>Edit project</h1>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-success">Back to projects list</a>
    </div>
    <form action="{{ route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>
        <div class="mb-3">
            <label for="overview" class="form-label">Overview</label>
            <input type="text" class="form-control" id="overview" name="overview" value="{{ old('overview', $project->overview) }}">
        </div>
        <div class="mb-3">
            <label for="objectives" class="form-label">Objectives</label>
            <input type="text" class="form-control" id="objectives" name="objectives" value="{{ old('objectives', $project->objectives) }}">
        </div>
        <div class="mb-3">
            <label for="roadmap" class="form-label">Roadmap</label>
            <input type="text" class="form-control" id="roadmap" name="roadmap" value="{{ old('roadmap', $project->roadmap) }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $project->status) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type"value="{{ old('type', $project->type) }}" >
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Priority</label>
            <input type="text" class="form-control" id="priority" name="priority" value="{{ old('priority', $project->priority) }}">
        </div>
        <div class="mb-3">
            <label for="contributors" class="form-label">Contributors</label>
            <input type="text" class="form-control" id="contributors" name="contributors" value="{{ old('contributors', $project->contributors) }}">
        </div>
        <div class="mb-3">
            <label for="starting_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="starting_date" name="starting_date" value="{{ old('starting_date', $project->starting_date) }}">
        </div>
        <div class="mb-3">
            <label for="finish_date" class="form-label">Finish Date</label>
            <input type="date" class="form-control" id="finish_date" name="finish_date" value="{{ old('finish_date', $project->finish_date) }}">
        </div>
        <div class="mb-3">
            <div>Completed:</div>
            <label for="is_finished" class="form-label">No</label>
            <input type="radio" id="is_finished" name="is_finished" value="0" {{ ($project->is_finished === 0) ? "checked" : "" }}>
            <label for="is_finished" class="form-label">Yes</label>
            <input type="radio" id="is_finished" name="is_finished" value="1" {{ ($project->is_finished === 1) ? "checked" : "" }}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
