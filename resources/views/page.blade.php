@extends('layouts.main')
@section('content')
<div class="area--black">
    <div class="wrapper--white">
        {!! html_entity_decode($content->content) !!}
    </div>
</div>
@endsection