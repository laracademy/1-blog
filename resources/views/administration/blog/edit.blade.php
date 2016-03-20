@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote.css') }}">
@stop

@section('scripts')
    <script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>

    <script>
        $(function() {
            $('#summernote').summernote({
                height: 300
            });
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                Administration - Updating {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @include('layouts.partials.messages')

            <form method="POST" action="{{ URL::route('administration.update') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $post->id }}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" id="summernote" cols="30" rows="10" class="form-control" style="height: 300px;">{{ old('content', $post->content) }}</textarea>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <input type="submit" value="Update Post" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@stop