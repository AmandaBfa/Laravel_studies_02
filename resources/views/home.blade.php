@extends('layouts/main_layout')
@section('content')
    {{-- usando o continue e break --}}
    @for ($index = 0; $index < 10; $index++)
        {{-- continue --}}
        {{-- se o indice for igual ao valor referido, ele vai continuar apos ser ele --}}
        @if ($index == 5)
            @continue
        @endif

        <p>Index: {{ $index }}</p>

        {{-- break --}}
        @if ($index == 7)
            @break
        @endif
    @endfor

    {{-- loop variable --}}
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
        <h3>{{ $loop->index }}</h3>
        {{--  --}}

        @if ($loop->first)
            <h3>Primeira Cidade</h3>
        @endif

        @if ($loop->last)
            <h3>Última Cidade</h3>
        @endif
    @endforeach
@endsection
