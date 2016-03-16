@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                Administration
                <span class="pull-right">
                    <a href="{{ URL::route('administration.create') }}" class="btn btn-success">Create New Post</a>
                </span>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Published At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->slug }}
                            </td>
                            <td>
                                @if($post->is_published)
                                    Published
                                @else
                                    Not Published
                                @endif
                            </td>
                            <td>
                                {{ $post->published_at->format('F d, Y g:iA') }}
                            </td>
                            <td>
                                <a href="{{ URL::route('administration.edit', $post->id) }}" class="btn btn-info">Edit Post</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop