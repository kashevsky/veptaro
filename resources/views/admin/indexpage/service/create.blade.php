@extends('layouts.admin')
@section('content')
<div class="area--black">
    <div class="wrapper--white">
        <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="text" name="h3" placeholder="Заголовок">
            <br>
            <br>
            <input type="file" name="image" placeholder="Картинка">
            <br>
            <input type="text" name="link" placeholder="URL адрес ">
            <br>
            <br>
            <textarea class="editor" name="content"></textarea>
            <br>
            <input type="submit">
        </form>
    </div>
</div>
@endsection