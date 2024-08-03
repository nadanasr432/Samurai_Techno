@extends('dashboard.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Graphic Projects</h2>
        <a href="{{ route('projects.project.create') }}" class="btn btn-primary mb-3">Add New Project</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
                        </td>
                        <td>{{ $project->type_name }}</td>
                        <td>
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" alt="Project Image" style="width: 100px; height: auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('projects.project.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('projects.project.destroy', $project->id) }}" method="POST"
                                style="display:inline;" onsubmit="return confirmDeletion(event);">
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

    <script>
        function confirmDeletion(event) {
            if (!confirm('Are you sure you want to delete this project?')) {
                event.preventDefault();
            }
        }
    </script>
@endsection
