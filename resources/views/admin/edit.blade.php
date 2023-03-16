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
                <div class="catalog_flex">
                @foreach ($services as $service )
                    <a class="catalog__link" href="{{$service->link}}">
                        <div class="catalog__item-admin">
                            <img src="{{$service->image}}">
                            <h3>
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
                <img src="{{Storage::url($section->left_image)}}">
                @endisset
                <input type="file" name="<?php echo 'left_image'.$i ?>">
            </div>    
        <h2 class="title--h2">
                <textarea style="widows: 900px" class="title_editor" name="<?php echo 'h2'.$i ?>">{{$section->h2}}</textarea>
        </h2>
        <div class="image">
            @isset($section->right_image)
            <img src="{{Storage::url($section->right_image)}}">
            @endisset
            <input type="file" name="<?php echo 'right_image'.$i ?>">
        </div> 
        </div>
        <div class="text">
                <textarea class="editor" name="<?php echo 'content'.$i ?>">{{$section->content}}</textarea>
        </div>
        <?php $i++ ?>
        @endforeach
        <input type="hidden" name="count" value="{{$i}}">
        <div class="submit">
            <input type="submit" value="Обновить">
        </div>
    </form>
    </div>
    </div>
    <div class="diploms_container">
        <div class="diploms">
        </div>
    </div>
</div>
@endsection