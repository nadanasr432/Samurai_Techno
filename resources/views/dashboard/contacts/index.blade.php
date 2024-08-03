@extends('dashboard.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Contacts</h2>
        {{-- <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a> --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->location ?? 'N/A' }}</td>
                        <td>
                            @if ($contact->media->isNotEmpty())
                                <img src="{{ Storage::url($contact->media->first()->file_path) }}" alt="Company Image" style="width: 100px; height: auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            {{-- <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                style="display:inline;" onsubmit="return confirmDeletion(event);">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDeletion(event) {
            if (!confirm('Are you sure you want to delete this contact?')) {
                event.preventDefault();
            }
        }
    </script>
@endsection
