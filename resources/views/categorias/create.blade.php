<x-layout title="Cadastrar Categoria">


    <form action="/categorias/salvar" method="post">
        @csrf
        <div class="mb-2">
            <label for="" class="form-label">Nome da Categoria</label>
            <input type="text" required name="nome" class="form-control">
        </div>

        <button class="btn btn-success" type="submit">Salvar</button>
    </form>

</x-layout>
    