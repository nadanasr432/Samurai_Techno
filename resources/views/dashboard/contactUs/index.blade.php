@extends('dashboard.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Contact Messages</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Read</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->text }}</td>
                        <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            @if ($message->read)
                                <span class="badge badge-success">Read</span>
                            @else
                                <a href="{{ route('contact_us.mark_as_read', $message->id) }}" class="btn btn-primary">Mark as Read</a>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('contact_us.destroy', $message->id) }}" method="POST"
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
            if (!confirm('Are you sure you want to delete this message?')) {
                event.preventDefault();
            }
        }
    </script>
@endsection
