@extends('layout')
@section('titulo-pesquisa')
A minha APP
 @endsection
 @section('header')
 Bem-vindo
 @endsection
 @section('conteudo')
 <h2>Esta é a minha primeira web APP formulario em laravel</h2>
 <a href="{{route('mostrar.form')}}">Ir para o formulario</a>
 @endsection