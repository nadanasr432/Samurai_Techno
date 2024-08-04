@extends('dashboard.layouts.app')

@section('content')
    <h2>Edit Project</h2>
    <form action="{{ route('projects.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" required>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $project->link) }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control" required>
                @foreach(App\Enums\ProjectTypesEnum::options() as $value => $name)
                    <option value="{{ $value }}" {{ $value == old('type', $project->type) ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image (optional)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
@endsection
