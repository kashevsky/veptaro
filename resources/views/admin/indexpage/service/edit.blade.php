@extends('layouts.admin')
@section('content')
<div class="area--black">
    <h1>Добавление блока</h1>
    <div class="wrapper--white">
        <form action="{{route('admin.service.update',$service->link)}}" method="post" enctype="multipart/form-data" >
            @csrf
            <label>Заголовок</label>
            <br>
            <input type="text" name="h3" placeholder="Заголовок" value="{{$service->h3}}">
            <br>
            <br>
            <label>Отображение</label>
            <br>
            <input type="file" name="image" placeholder="Картинка">
            <br>
            <label>URL страницы</label>
            <br>
            <input type="text" name="link" placeholder="URL адрес" value="{{$service->link}}">
            <br>
            <br>
            <label>Контент страницы</label>
            <br>
            <textarea class="editor-long" name="content">{{$page->content}}</textarea>
            <br>
            <div class="submit">
            <input type="submit">
            </div>
        </form>
    </div>
</div>
@endsection