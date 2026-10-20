
@extends('layouts.app')

@section('title', 'Portfolio — Aca | Art, Design & Technology')

@section('content')

    @include('partials.navbar')

    <script async src="https://www.instagram.com/embed.js"></script>

    <main id="home">
        @include('partials.hero')
        @include('partials.skills')
        @include('partials.artworks')
        @include('partials.creative-statement')
        @include('partials.projects')
        @include('partials.contact')
    </main>

    @include('partials.footer')

@endsection
