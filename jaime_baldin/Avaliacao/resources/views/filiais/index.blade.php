@extends('app')
@section('title', 'Lista de estudantes')
@section('content')
    <h1>Lista de Filiais</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filiais as $filiais)
                <tr>
                    <td>
                        <a href="{{ route('filiais.show', $filiais) }}">
                            {{ $filiais->nome_filial }}
                        </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection

