@extends('layouts.app')
@section('title-block')
    Оновлення запису
@endsection
@section('content')
    <h1>Контакти:</h1>
    <form action="{{ route('contact-update-submit',$data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ім'я:</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Введіть email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Введіть тему" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea name="message"  placeholder="Введіть текст" id="message" class="form-control">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновити</button>
    </form>
@endsection
