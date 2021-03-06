@extends('layouts.app')

@section('content')

    @include('partials.main-bar')

    @foreach($meetings as $meeting)

        @component('components.meeting-preview', [
            'id' => $meeting->id,
            'title' => $meeting->title,
            'author' => $meeting->author()->get()[0]->name,
            'description' => $meeting->short_description,
            'created_at' => $meeting->created_at,
            'comments_count' => $meeting->comments_count
        ])
        @endcomponent

    @endforeach

    <div class="container mt-4 d-flex justify-content-end">
        {{ $meetings->links() }}
    </div>

@endsection
