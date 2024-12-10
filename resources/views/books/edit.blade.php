@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titlu</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        </div>

        @error('title')
            <div class="text-red-500">*{{ $message }}</div><br>
        @enderror

        <div>
            <label for="description">Descriere</label>
            <textarea name="description" id="description">{{ old('description', $book->description) }}</textarea>
        </div>
        @error('description')
            <div class="text-red-500">*{{ $message }}</div><br>
        @enderror

        <div>
            <label for="category_id">Categorie</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category_id', $book->category_id) == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        @error('category_id')
            <div class="text-red-500">*{{ $message }}</div><br>
        @enderror

        <button type="submit" class="border border-green-500">Actualizează</button>
    </form>
@endsection
