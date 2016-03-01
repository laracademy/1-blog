@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $post->title }}
            </h1>
            <h4>
                {{ $post->published_at->format('F d, Y g:iA') }}
            </h4>
            <div class="">
                {{ $post->content }}
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop