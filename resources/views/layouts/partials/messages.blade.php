@if($errors)
    @if($errors->count() > 0)
        <div class="alert alert-danger">
            <h4>Oh No</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endif