@extends('layout.main')

@section('title', 'Eventos')

@section('content')
    <div>
        <h1>Leo aqui </h1>
        <p>O {{ $nome }} tem {{ $idade }} anos.</p>
        <img src="/img/cat.jpg" alt="" srcset="">
        <br>
        <br>
        <a href="/contato" class="btn btn-primary" > Pagina Contato</a>
        <br>
        <br>
        <a href="/produtos" class="btn btn-primary" > Pagina Produtos</a>
    </div>

@endsection

