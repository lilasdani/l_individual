@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-5">
        <h1 class="font-bold text-blue-500 text-2xl">{{ $books->title }}</h1>
        <p>{{ $books->description }}</p>

        <h2 class="font-bold text-slate-600 text-xl">Categoria</h3>
        <p>{{ $books->category->name }}</p>
    </div>
@endsection

