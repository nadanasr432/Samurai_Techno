@extends('app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-3 mb-4">
                    <div class="card custom-card">
                        <a href="{{ $project->link }}" target="_blank">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" class="card-img-top" alt="{{ $project->name }} Image">
                            @else
                                <img src="https://via.placeholder.com/150x100?text=No+Image" class="card-img-top" alt="No Image"> <!-- حجم الصورة أصغر -->
                            @endif
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <p class="card-text">
                                <a href="{{ $project->link }}" target="_blank" style="color:#CF1D1D">View Project</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
