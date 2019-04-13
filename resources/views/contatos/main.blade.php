@extends('base.main') @section('content')
<h1>Listando contatos</h1>

<table>
    <thead>
        <th>Nome</th>
        <th>email</th>
        <th>Telefone</th>
        <th>ações</th>
    </thead>
    <tbody>
        @foreach($contatos as $contato)
            <tr>
                <td>{{$contato->nome}}</td>
                <td>{{$contato->email}}</td>
                <td>{{$contato->telefone}}</td>
                <td>
                    <a href="#">Ver</a>
                    <a href="#">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection