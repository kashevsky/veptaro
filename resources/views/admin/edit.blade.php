@extends('layouts.admin')
@section('content')
<div class="wrapper-side">
    <div class="background">
        <div class="wrapper-side-content">
            <h2 class="title--h2">
                <a name="uslugi"></a>
                Услуги предсказаний Таро
                </h2>
            <div class="catalog">
                <div style="display:flex; flex-wrap: wrap">
                @foreach ($services as $service )
                    <a class="catalog__link" href="{{$service->link}}">
                        <div class="catalog__item" style="width: 250px">
                            <img src="{{$service->image}}" class="catalog__img" style="width: 200px">
                            <h3 style="font-size: 10px">
                                {{$service->h3}}
                            </h3>
                        </div>
                    </a>
                @endforeach
                </div>
                <div class="button_admin">
                    <a href="{{route('admin.service.create')}}">Добавить новый блок</a>
                </div>
            </div>
        </div> 
        <div class="video">
            <video id="video_background2" preload="auto" autoplay="true" loop="true" muted="muted">
                <source src="video/video.mp4">
            </video>
        </div>
    </div>
    <div class="background">
    <div class="wrapper-side-content--borders">
        <form action="{{route('admin.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <?php $i = 0 ?>
        @foreach ($sections as $section )
        <div class="flex">
            <div class="image">
                @isset($section->left_image)
                <img src="{{$section->left_image}}">
                @endisset
                    <input type="file" name="left_image">
            </div>    
        <h2 class="title--h2">
                <textarea class="editor" name="<?php echo 'h2'.$i ?>">{{$section->h2}}</textarea>
        </h2>
            <div class="image">
                <img src="{{$section->right_image}}">
                    <input type="file" name="right_image">
            </div> 
        </div>
        <div class="text">
                <textarea class="editor" name="<?php echo 'content'.$i ?>">{{$section->content}}</textarea>
        </div>
        <?php $i++ ?>
        @endforeach
        <input type="hidden" name="count" value="{{$i}}">
        <input type="submit" value="Изменить" style="margin-left: 17vw">
    </form>
    </div>
    </div>
    <div class="diploms_container">
        <div class="diploms">
        </div>
    </div>
</div>
@endsection