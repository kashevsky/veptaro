@extends('layouts.main')
@section('content')
<div class="area--black">
    <h1>Консультация таролога</h1>
    @isset($content->sections)
    <div class="services">
        @foreach ($content->sections as $section )
        <div class="services__item">
            <div class="services__image">
                <img src="{{$section->image}}">
            </div>
            <div class="services_text">
                <div class="services_title">
                    <h3>{{$section->h2}}</h3>
                </div>
                <div class="services_content">
                    <p>{{$section->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h2>{{$content->h2}}</h2>
    <div class="wrapper--white">
        <div class="wrapper__text">
            {{$content->content}}
        </div>
    </div>
    @endisset
</div>
@endsection