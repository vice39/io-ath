@extends('layouts.app')

@section('content')

    @auth
        @include('partials.main-bar')
    @endauth

    @foreach($meetings as $meeting)

        @component('components.meeting-preview', [
            'id' => $meeting->id,
            'title' => $meeting->title,
            'author' => $meeting->author,
            'description' => $meeting->short_description,
            'comments_count' => $meeting->comments_count
        ])
        @endcomponent

    @endforeach

    {{ $meetings->links() }}

@endsection
