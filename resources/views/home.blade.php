@extends('layouts/main_layout')
@section('content')
    {{-- switch --}}
    @switch($value)
        @case(100)
            <h1>Valor 100</h1>
        @break

        @case(200)
            <h1>Valor 200</h1>
        @break

        @case(300)
            <h1>Valor 300</h1>
        @break

        @default
            {{-- bloco de código que será executado se nenhum dos case corresponder ao valor testado. --}}
            <h1>Outro!</h1>
    @endswitch
@endsection
