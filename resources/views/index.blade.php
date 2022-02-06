@extends('layouts.app')

@section('content')

    @include('partials.main-bar')

    @foreach($meetings as $meeting)

        @component('components.meeting', [
            'id' => $meeting->id,
            'title' => $meeting->title,
            'author' => $meeting->author()
        ])
        @endcomponent

    @endforeach

    {{ $meetings->links() }}

@endsection
