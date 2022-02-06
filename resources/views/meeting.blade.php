@extends('layouts.app')

@section('content')

    @component('components.meeting', [
        'id' => $meeting->id,
        'title' => $meeting->title,
        'author' => $meeting->author()
    ])
    @endcomponent


@endsection
