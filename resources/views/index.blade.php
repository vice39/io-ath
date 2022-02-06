@extends('layouts.app')

@section('content')

    @include('partials.main-bar')

    @foreach($meetings as $meeting)

        @component('components.meeting-preview', [
            'id' => $meeting->id,
            'title' => $meeting->title,
            'author' => $meeting->author(),
            'description' => $meeting->short_description
        ])
        @endcomponent

    @endforeach

    {{ $meetings->links() }}

@endsection
