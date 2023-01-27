<x-layout title="Categorias">

    <a href="/categorias/criar">Cadastrar Nova</a>

<ul>
@foreach ($categorias as $categoria)
    <li>{{ $categoria->nome }}</li>
@endforeach
    
</ul>
</x-layout>
