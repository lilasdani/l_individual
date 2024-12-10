@extends('layouts.app')

@section('title', 'Toate cărțile')

@section('content')
    <h2>Bun venit pe pagina noastra!</h2>

    <table class="table-auto border-collapse border border-gray-400 w-full">
        <thead>
            <tr>
                <th>Titlu</th>
                <th >Descriere</th>
                <th>Categorie</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->category->name ?? 'Fără categorie' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"">Nu există cărți disponibile.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
