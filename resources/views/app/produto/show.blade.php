@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Visualizar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left;">
                    <tr>
                        <td>ID:</td>
                        <td>{{ $produto->id }}</td>
                    </tr>
                    <tr>
                        <th>Nome:</th>
                        <th>{{ $produto->nome }}</th>
                    </tr>
                    <tr>
                        <th>Descrição:</th>
                        <th>{{ $produto->descricao }}</th>
                    </tr>
                    <tr>
                        <th>Peso:</th>
                        <th>{{ $produto->peso }} kg</th>
                    </tr>
                    <tr>
                        <th>Unidade de Medida:</th>
                        <th>{{ $produto->unidade_id }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection