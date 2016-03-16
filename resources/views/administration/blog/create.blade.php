@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote.css') }}">
@stop

@section('scripts')
    <script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>

    <script>
        $(function() {
            $('#summernote').summernote();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                Administration - Creating new blog post
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @include('layouts.partials.messages')

            <form method="POST" action="{{ URL::route('administration.store') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" id="summernote" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Save Post">
                </div>

            </form>

        </div>
    </div>

@stop