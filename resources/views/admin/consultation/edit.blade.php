@extends('layouts.admin')
@section('content')
<div class="area--black">
    <h1>Консультация таролога</h1>
    @isset($content->sections)
    <div class="services">
        <form action="{{route('admin.service.consultation.update')}}" method="post" enctype="multipart/form-data">
            @csrf
        <?php $i = 0 ?>
        @foreach ($content->sections as $section )
        <div class="services__item">
            <div class="services__image">
                <img src="{{Storage::url($section->image)}}">
                <input type="file" name="<?php echo 'image'.$i ?>">
            </div>
            <div class="services_text">
                <div class="services_title">
                    <h3><input type="text" name="<?php echo 'h2'.$i ?>" value="{{$section->h2}}"></h3>
                </div>
                <div class="services_content">
                    <textarea class="editor" name="<?php echo 'text'.$i ?>">
                    {{$section->text}}
                    </textarea>
                    <?php $i++ ?>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h2><input type="text" value="{{$content->h2}}" name="content_h2"></h2>
    <div class="wrapper--white">
        <div class="wrapper__text">
            <textarea class="editor" name="content">
                {!! html_entity_decode($content->content) !!}
            </textarea>
        </div>
    </div>
    <input type="hidden" name="count" value="{{$i}}">
    <div class="submit">
        <input type="submit" value="Изменить">
    </div>
        </form>
    @endisset
</div>
@endsection