@extends('layouts.main')

@section('container')
<h1>Halaman Blog</h1>
    @foreach ($blog as $blogs)
    <article class="mt-5">
        <h2><a href="/posts/{{ $blogs["slug"] }}">{{ $blogs["title"] }}</h2></a>
        <h5>BY: {{ $blogs["author"] }}</h5>
        <p>{{ $blogs["body"] }}</p>
    </article>
    
        
    @endforeach
@endsection
