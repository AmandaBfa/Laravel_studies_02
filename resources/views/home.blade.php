@extends('layouts/main_layout')
@section('content')
    {{-- empty --}}
    @empty($value)
        <p>Não existe!</p>
    @else
        <p>Existe!</p>
    @endempty

    {{-- isste --}}
    @isset($values)
        <p>Existe a Váriavel!</p>
    @else
        <p>Não existe a Váriavel!</p>
    @endisset

    {{-- unless --}}
    {{-- so se a condição que estiver dentro for negativa que o código vai ser executado --}}
    @unless ($value != 100)
        <p>OK!!!!!</p>
    @endunless
@endsection
