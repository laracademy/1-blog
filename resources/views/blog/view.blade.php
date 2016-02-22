@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            I am the view action, and i accepted the slug: {{ $slug }}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        alert('i will only be fired on the view page')
    </script>
@stop