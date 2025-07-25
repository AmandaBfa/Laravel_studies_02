@extends('layouts/main_layout')
@section('content')
    {{-- for --}}
    @for ($index = 0; $index < 5; $index++)
        <h1>{{ $index }}</h1>
    @endfor

    {{-- foreach --}}
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
    @endforeach

    {{-- forelse --}}
    {{--  é uma estrutura de repetição do Blade que funciona como um foreach, mas com um "plano B" caso a lista esteja vazia. --}}
    @forelse ($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Names está vazio!!!!!</p>
    @endforelse

    {{-- while --}}
    @while ($indice < 16)
        <p>Índice: {{ $indice }}</p>
        @php
            $indice++;
        @endphp
    @endwhile
@endsection
