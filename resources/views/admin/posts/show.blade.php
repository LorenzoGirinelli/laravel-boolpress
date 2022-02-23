@extends('layouts.dashboard')

@section('content')
    <section>
        <h1>{{ $post->title }}</h1>

        <div class="mb-2"><strong>Slug:</strong> {{ $post->slug }}</div>

        <p>{{ $post->content }}</p>

        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica post</a>
    </section>
@endsection