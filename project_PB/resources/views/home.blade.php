@extends('layouts.app')

@section('title-block')Главная страница@endsection


@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae esse inventore facilis culpa ullam est nostrum sit atque ex obcaecati perferendis ipsa tenetur, quibusdam cum numquam accusamus ab reprehenderit dignissimos!</p>
@endsection


@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection