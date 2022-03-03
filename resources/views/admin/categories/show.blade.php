@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>{{ $category->name }}</h2>

        <ul>
            @forelse ($posts as $post)
                <li>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                </li>
            @empty
                <div>Nessun post trovato</div>
            @endforelse
        </ul>
    </section>
@endsection 