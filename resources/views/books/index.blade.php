@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div>
        <a class="bg-blue-200 p-3 rounded-md" href="{{ route('books.create') }}">Create New Book</a>
    </div>

    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Log Out
    </button>

    <ul>
        @foreach ($books as $books)
            <li class="bg-white p-5 rounded-lg shadow-md">
                <h2 href="{{ route('books.show', $books->id) }}">{{ $books->title }}</h2>
                <p class="mt-2 text-gray-700"><strong>Description:</strong> {{ $books->description }}</p>
                <p class="mt-2 text-gray-700"><strong>Created At:</strong> {{ $books->created_at }}</p>
                <p class="mt-2 text-gray-700"><strong>Updated At:</strong> {{ $books->updated_at }}</p>
                <p class="mt-2 text-gray-700"><strong>Category:</strong> {{ $books->category_id }}</p>

                <div class="flex flex-row gap-3 mt-2">
                    <a href="{{ route('books.edit', $books->id) }}"
                        class="bg-green-300 p-3 rounded-md hover:bg-green-400">Edit</a>
                    <form action="{{ route('books.destroy', $books->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
