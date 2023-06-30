@extends('layouts.main')

@section('title', 'DHC Events')


@section('content')




                <h1>Pagina Principal</h1>
                <img src="/img/auditorio.04.jpg" alt="">
                
                @if(10 > 5)
                    <p>A condição é True</p>

                @endif

                <p>{{$nome}}</p>

                @if($nome == "Pedro")
                <p>O nome é Pedro</p>
                @elseif($nome == "Alexandre")
                <p>O nome é {{$nome}}, ele tem {{$idade}} e é um {{$profissao}}!</p>
                @else
                <p>O nome não é Pedro</p>
                @endif

                @for($i = 0; $i < count($arr); $i++)
                    <p>{{$arr[$i]}} - {{$i}}</p>
                    @if($i == 2)
                    <p>O i é 2</p>
                    @endif
                @endfor

                <br>Nome das famílias
                @foreach ($nomes as $nome)
                    <p>{{$nome}}</p>
                @endforeach
<br>
                @php
                    $nome = "João";
                    echo $nome;
                @endphp

                    <!--Comentários em HTML aparece na inspeção-->

                    {{--comentário em blade é entre chaves e assim nao aparece na inspeção de codigo--}}


@endsection
