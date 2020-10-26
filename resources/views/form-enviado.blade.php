@extends('layout')
@section('titulo-pagina')
Formulario submetido
@endsection
@section('header')
Informação enviada atraves de form
@endsection
@section('conteudo')
{{$nome}}<br>
{{$morada}}<br>
{{$automovel}}
@endsection