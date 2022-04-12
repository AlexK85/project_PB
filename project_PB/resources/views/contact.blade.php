@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form action="/contact/submit" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
        </div>
        <div class="form-group">
            <label for="email ">Email</label>
            <input type="text" name="email" id="email" placeholder="Введите email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Cообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection

