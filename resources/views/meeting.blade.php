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

    @foreach($meeting->comments as $comment)
        @include('partials.comment', ['comment' => $comment])
    @endforeach

    <div class="comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Dodaj komentarz</h4>
                </div>
                <div class="col-12">
                    <form method="post" action="{{ route('meeting.comments.store', [ 'meeting' => $meeting ]) }}">
                        @csrf

                        <textarea class="w-100" name="content">
                        </textarea>

                        <input class="mt-2" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
