@extends('base.main') @section('content')
<a href="/">Voltar</a>
<h1>Adicionar contatos</h1>

<form action="{{route('contato.post.adicionar')}}" method="post">
    {{csrf_field()}}
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="">
    </p>
    <p>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="">
    </p>
    <p>
        <input type="submit" value="salvar">
    </p>


</form>
@endsection