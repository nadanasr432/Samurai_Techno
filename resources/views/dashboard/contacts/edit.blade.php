@extends('dashboard.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Contact</h2>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email', $contact->email) }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control"
                    value="{{ old('phone', $contact->phone) }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" class="form-control"
                    value="{{ old('location', $contact->location) }}">
            </div>
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" id="logo" name="logo" class="form-control">
                @if ($contact->media->isNotEmpty())
                    <img src="{{ Storage::url($contact->media->first()->file_path) }}" alt="Company Image"
                        style="width: 100px; height: auto;">
                @else
                    No Image
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
