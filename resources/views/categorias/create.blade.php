<x-layout title="Cadastrar Categoria">


    <form action="/categorias/salvar" method="post">
        @csrf
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>

</x-layout>
    