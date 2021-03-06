@extends('ui.nav')

@section('contenido-admin')

<h2 class="bg-white text-lg rounded-lg p-4 text-center font-bold border-2 border-sky-800">Agregar Categoría</h2>
<form action="{{ route('category.update', $category->id) }}" method="POST" novalidate class="actualizar">

    @csrf
    @method('PUT')
    <div class="mb-5">
        <label for="nombre_categoria" class="mb-2 block uppercase text-gray-500 font-bold">
            Editar Categoría
        </label>
        <input
            id="nombre_categoria"
            type="text"
            name="nombre_categoria"
            placeholder="Ingrese el nombre de la categoria"
            class="border p-3 w-full rounded-lg"
            @error('nombre_categoria')
                border-red-500
            @enderror
            value="{{$category->nombre_categoria}}"
        />
        @error('nombre_categoria')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
        @enderror

        <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
            Descripción de Categoría (Opcional)
        </label>
        <input
            id="descripcion"
            type="text"
            name="descripcion"
            placeholder="numero de edicion"
            class="border p-3 w-full rounded-lg"
            @error('descripcion')
                border-red-500
            @enderror
            value="{{$category->descripcion}}"
        />
        @error('descripcion')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
        @enderror

        {{-- botones de guardar - cancelar cambios --}}

        <div class="flex flex-row-reverse  my-5 text-right">
            <input
                type="submit"
                value="Guardar Cambios"
                class="w-1/2 text-white bg-sky-600 hover:bg-sky-700 uppercase font-bold focus:ring-4 font-lg rounded-lg text-sm px-5 py-2.5 text- mr-2 mb-2 "
            />
            <a class=" text-white bg-red-600 hover:bg-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " href="{{ route('category.index') }}">Cancelar</a>
        </div>

</form>


@endsection
