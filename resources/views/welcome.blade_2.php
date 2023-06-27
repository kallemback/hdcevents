@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Titulo</h1>
<img src="/img/Auditorio.04.jpg" alt="auditorio">
@if(10>5)
    <p>A condição é true</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Matheus")
<p>O nome é {{ $nome }} e ele tem {{$idade}} anos de idade, e trabalha como {{$profissao}}.</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0;$i < count($arr);$i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
@endfor

@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

{{--comentario com blade no HTML- não aparece na inspeção de codigo--}}

@endsection
