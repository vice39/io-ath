@extends('layouts.app')

@section('content')

    @component('components.meeting', [
        'id' => $meeting->id,
        'title' => $meeting->title,
        'author' => $meeting->author()
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
                    <form method="post" action="{{ route('meeting.comments.store', [ 'meeting' => $meeting ]) }}">
                        @csrf

                        <textarea name="content">
                        </textarea>

                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
