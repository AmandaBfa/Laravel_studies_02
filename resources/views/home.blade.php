@extends('layouts/main_layout')
@section('content')
    {{-- instrução IF simples --}}
    @if ($value == 100)
        <h1>Primeira parte do código</h1>
    @endif

    {{-- instrução IF ELSE --}}
    @if ($value !== 100)
        <h1>Primeira parte do código</h1>
    @else
        <h1>Segunda parte do código</h1>
    @endif

    {{-- instrução IF ELSEIF ELSE ENDIF --}}
    @if ($value < 10)
        <p>PRIMEIRO</p>
    @elseif($value < 20)
        <p>SEGUNDO</p>
    @elseif($value < 50)
        <p>TERCEIRO</p>
    @elseif($value <= 100)
        <p>QUARTO</p>
    @else
        <p>OUTRO CASO</p>
    @endif
@endsection
