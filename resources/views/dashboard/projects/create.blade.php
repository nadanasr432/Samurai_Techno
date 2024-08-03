@extends('dashboard.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Create Project</h2>
        <form action="{{ route('projects.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="link">Project Link</label>
                <input type="url" id="link" name="link" class="form-control" value="{{ old('link') }}"
                    required>
            </div>
            <div class="form-group">
                <label for="type">Project Type</label>
                <select id="type" name="type" class="form-control" required>
                    @foreach (App\Enums\ProjectTypesEnum::cases() as $type)
                        <option value="{{ $type->value }}" {{ old('type') == $type->value ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Project Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
