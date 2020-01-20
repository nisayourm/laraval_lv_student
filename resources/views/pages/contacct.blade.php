
@extends('layouts.app')

@section('lv-Day')
<div class="jumbotron mt-5">
    <h1>{{ $title }}</h1>
    @if(count($infos) > 0)
        <ul class="list-group">

            @foreach ($infos as $item)
                 <li class="list-group-item">{{ $key }}:{{ $item }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection