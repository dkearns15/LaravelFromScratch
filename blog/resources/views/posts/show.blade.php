@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    <h1> {{$post->title}} </h1>
    <p>{{$post->body}}</p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
            <article class="comment">
                <li class="list-group-item">
                    <strong>
                    {{$comment->created_at->diffForHumans()}}
                    </strong>
                    {{$comment->body}}
                </li>
            </article>
            @endforeach
        </ul>
    </div>
</div>
@endsection
