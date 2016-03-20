@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                Administration
                <span class="pull-right">
                    <a href="{{ URL::route('administration.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Create New Post</a>
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
                                @if($post->is_published)
                                    <a href="{{ URL::route('view', $post->slug) }}">
                                        {{ $post->slug }}
                                    </a>
                                @else
                                    {{ $post->slug }}
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    @if($post->is_published)
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Published <span class="caret"></span>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Not Published <span class="caret"></span>
                                        </button>
                                    @endif

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ URL::route('administration.publish', $post->id) }}">Publish Post</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('administration.unpublish', $post->id) }}">Unpublish Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                @if($post->is_published)
                                    {{ $post->published_at->format('F d, Y g:iA') }}
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ URL::route('administration.destroy', $post->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="fa fa-trash-o"></i> Delete</a>
                                    <a href="{{ URL::route('administration.edit', $post->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop