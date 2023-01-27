<x-layout title="Categorias">

    <a class="btn btn-primary" href="/categorias/criar">Cadastrar Nova</a>

<ul class="list-group mt-2">
@foreach ($categorias as $categoria)
    <li class="list-group-item">{{ $categoria->nome }}</li>
@endforeach
    
</ul>
</x-layout>
