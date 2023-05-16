@extends('layouts.app')

@section('content')
<div class="container my-4">
    <form action="{{ route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="overview" class="form-label">Overview</label>
            <input type="text" class="form-control" id="overview" name="overview" value="{{ old('overview') }}">
        </div>
        <div class="mb-3">
            <label for="objectives" class="form-label">Objectives</label>
            <input type="text" class="form-control" id="objectives" name="objectives" value="{{ old('objectives') }}">
        </div>
        <div class="mb-3">
            <label for="roadmap" class="form-label">Roadmap</label>
            <input type="text" class="form-control" id="roadmap" name="roadmap" value="{{ old('roadmap') }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ old('status') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type"value="{{ old('type') }}" >
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Priority</label>
            <input type="text" class="form-control" id="priority" name="priority" value="{{ old('priority') }}">
        </div>
        <div class="mb-3">
            <label for="contributors" class="form-label">Contributors</label>
            <input type="text" class="form-control" id="contributors" name="contributors" value="{{ old('contributors') }}">
        </div>
        <div class="mb-3">
            <label for="starting_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="starting_date" name="starting_date" value="{{ old('starting_date') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
