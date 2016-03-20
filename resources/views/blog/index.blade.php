@extends('layouts.master')

@section('content')

    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-12">
                    <h4>{{ $post->title }}</h4>
                    <h5>{{ $post->published_at->format('F d, Y g:iA') }}</h5>
                    <p>
                        {!! str_limit(strip_tags($post->content, Config::get('tags.allowed.homepage')), 250) !!}
                    </p>
                    <p>
                        <a href="{{ URL::route('view', $post->slug) }}" class="btn btn-default">Read More ...</a>
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <h4>Sorry</h4>
                    <p>
                        There are not posts that have been published, please check again later.
                    </p>
                </div>
            </div>
        </div>
    @endif

@stop