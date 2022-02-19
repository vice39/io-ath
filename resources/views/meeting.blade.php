@extends('layouts.app')

@section('content')

    @component('components.meeting', [
        'id' => $meeting->id,
        'title' => $meeting->title,
        'author' => $meeting->author(),
        'short_description' => $meeting->short_description,
        'description' => $meeting->description,
    ])
    @endcomponent

    <div class="container mt-3">
        <h3 class="">
            Komentarze
        </h3>

        @if($meeting->comments->empty())
            <div class="mb-2" style="font-size: 18px;">
                Na razie brak komentarzy.
                @auth
                    Może dodasz pierwszy komentarz?
                @endauth
            </div>
        @else
            @foreach($meeting->comments as $comment)
                @include('partials.comment', ['comment' => $comment])
            @endforeach
        @endif

        @auth
            <div class="row">
                <div class="col-12">
                    <h3>Dodaj komentarz</h3>
                </div>
                <div class="col-12">
                    <form method="post" action="{{ route('meeting.comments.store', [ 'meeting' => $meeting ]) }}">
                        @csrf

                        <textarea class="w-100 comment__wrapper" name="content"></textarea>

                        <input class="mt-2" type="submit">
                    </form>
                </div>
            </div>
        @endauth
    </div>


@endsection
