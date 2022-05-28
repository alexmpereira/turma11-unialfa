@extends('layouts.app')
@section('title', 'trabalho')

@section('content')
<section class="d-flex justify-content-between">
<a href="{{ route('filiais.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Filial</a>
</section>
<table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filiais as $filial)
                <tr>
                    <td>
                    <a href="{{ route('filiais.show', $filial) }}"> {{ $filial->nome_filial }} </a>
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('filial.edit', $filial) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('filial.destroy', $filial) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                            type="submit" 
                            class="btn btn-danger" 
                            onclick="return confirm('tem certeza que deseja apagar?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection